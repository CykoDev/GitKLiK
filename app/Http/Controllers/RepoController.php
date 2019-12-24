<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Repository;
use App\Git;

class RepoController extends Controller
{

    // function __construct()
    // {
    //      $this->middleware('permission:repository-list|repository-create|repository-edit|repository-delete',
    //      					['only' => ['index','show']]);
    //      $this->middleware('permission:repository-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:repository-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:repository-delete', ['only' => ['destroy']]);
    // }

    // function __construct()
    // {
    //      $this->middleware('permission:repository-list|repository-create|repository-edit|repository-delete',
    //      					['only' => ['index','show']]);
    //      $this->middleware('permission:repository-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:repository-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:repository-delete', ['only' => ['destroy']]);
    // }


    public function edit(User $user, Repository $repo)
    {
        // return view('repos.edit');
    }

    public function edit_file($userName, $repoPath)
    {
        $pathElements = explode('||', $repoPath);
        $repoName = $pathElements[0];

        $targetPath = $repoName;
        for ($i = 1; $i < sizeof($pathElements); $i++) {
            $targetPath = $targetPath . '\\' . $pathElements[$i];
        }

        $relativeRepoPath = 'repos\clones\\' . $targetPath;
        $data = [
            'content' => Storage::get($relativeRepoPath),
            'userName' => $userName,
            'repoName' => $repoName,
            'repoPath' => $repoPath,
            'relPath' => $relativeRepoPath,
            'fileName' => $pathElements[sizeof($pathElements) - 1],
        ];

        return view('repos.files.edit', compact('data'));
    }

    public function update(Request $request, User  $user)
    {
    }

    public function file_update(Request $request)
    {
        Storage::put($request['relPath'], $request['code']);
        $pathElements = explode('||', $request['repoPath']);

        $targetPath = $pathElements[0];
        for ($i = 1; $i < sizeof($pathElements) - 1; $i++) {
            $targetPath = $targetPath . '||' . $pathElements[$i];
        }

        return redirect('/' . $request['userName'] . '/repository/' . $targetPath);
    }

    public function destroy(User  $user)
    {
    }

    public function destroy_file($path)
    {
    }


    /*
    |--------------------------------------------------------------------------
    | Display Functions
    |--------------------------------------------------------------------------
    */

    public function index(User $model)
    {
        $repos = Repository::all();
        return view('repos.index', compact('repos'));
    }

    public function index_user($userName)
    {
        $user = User::whereName($userName)->firstOrFail();
        $repos = $user->repos;
        return view('repos.index_user', compact('repos'));
    }

    public function show($userName, $repoPath)
    {
        $pathElements = explode('||', $repoPath);
        $repoName = $pathElements[0];

        $targetPath = $repoName;
        for ($i = 1; $i < sizeof($pathElements); $i++) {
            $targetPath = $targetPath . '\\' . $pathElements[$i];
        }

        $user = User::whereName($userName)->first();
        $repo = $user->repos()->whereName($repoName)->first();
        $stars = $repo->stars;

        $starUsers = [];
        foreach ($stars as $star) {
            array_push($starUsers, $star->user);
        }

        $absoluteRepoPath = storage_path() . '\app\repos\clones\\' . $targetPath . '\\';
        $relativeRepoPath = 'repos\clones\\' . $targetPath;
        $pathSize = strlen($relativeRepoPath);

        $filePaths = Storage::files($relativeRepoPath);
        $directoryPaths = Storage::directories($relativeRepoPath);

        $directories = [];
        $files = [];

        foreach ($directoryPaths as $directoryPath) {
            $directory = substr($directoryPath, $pathSize + 1);
            $directories[$directory] = Git::dir_getLatestCommit($directory, $absoluteRepoPath);
        }

        foreach ($filePaths as $filePath) {
            $file = substr($filePath, $pathSize + 1);
            $files[$file] = Git::dir_getLatestCommit($file, $absoluteRepoPath);
        }

        $data = [
            'pathElements' => $pathElements,
            'repoPath' => $repoPath,
            'absPath' => $absoluteRepoPath,
            'relPath' => $relativeRepoPath,
            'user' => $user,
            'repo' => $repo,
            'latestCommits' => [],
        ];

        $data['latestCommits']['directories'] = $directories;
        $data['latestCommits']['files'] = $files;

        return view('repos.show', compact('data'));
    }

    public function file_show($userName, $repoPath)
    {
        $pathElements = explode('||', $repoPath);
        $repoName = $pathElements[0];

        $targetPath = $repoName;
        for ($i = 1; $i < sizeof($pathElements); $i++) {
            $targetPath = $targetPath . '\\' . $pathElements[$i];
        }

        $relativeRepoPath = 'repos\clones\\' . $targetPath;
        $data = [
            'relPath' => Storage::get($relativeRepoPath),
            'repoName' => $repoName,
            'fileName' => $pathElements[sizeof($pathElements) - 1],
        ];

        return view('repos.files.show', compact('data'));
    }


    /*
    |--------------------------------------------------------------------------
    | Store Functions
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {

        $repoName = $request['repoName'];
        $user = Auth::user();

        switch ($request['submit']) {

            case 'new':

                $repo = Repository::create([
                    'user_id' => $user->id,
                    'name' => $repoName,
                    'description' => $request['repoDesc'],
                ]);
                User::findOrFail($user->id)->repos()->save($repo);

                if ($request->has('readme')) {

                    Storage::put('repos/clones/' . $repoName . '/README.md', 'This is a readme file.');
                }
                if ($request->has('gitignore')) {

                    Storage::put('repos/clones/' . $repoName . '/.gitignore', '');
                }

                return redirect(route('repo.show', [Auth::user()->name, $repoName]));

                break;


            case 'import':
                if (!Git::cloneRemote($name)) {
                    return 'ERROR: git clone error';
                }

                return redirect(route('repo.show', [Auth::user()->name, $name]));
                break;
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Creation Functions
    |--------------------------------------------------------------------------
    */

    public function create_import($title)
    {

        $absolutePath = storage_path() . '\app\public\repos\remotes\\' . $title . '.git\\';
        $data = [
            'title' => $title,
            'absolutePath' => $absolutePath,
        ];

        if (!Git::initBare($title)) {
            return 'ERROR: git init bare error';
        }

        return view('repos.create_import', compact('data'));
    }

    public function create()
    {
        $userName = Auth::user()->name;
        return view('repos.create', compact('userName'));
    }

    public function create_directory(Request $request)
    {
        $dir = $request['relPath'] . '\\' . $request['dirName'];
        Storage::makeDirectory($dir);
        return back();
    }



    /*
    |--------------------------------------------------------------------------
    | Commit Functions
    |--------------------------------------------------------------------------
    */

    public function commit_index()
    {
        return view('repo.commits.index');
    }

    public function commit_show()
    {
        return view('repo.commits.show');
    }

    public function commit_create()
    {
        return view('repo.commits.create');
    }

    public function commit_store()
    {
    }


    /*
    |--------------------------------------------------------------------------
    | Star Functions
    |--------------------------------------------------------------------------
    */

    public function stars($repoName)
    {
        $repo = Repository::whereName($repoName)->firstOrFail();

        return view('repo.stars.index', compact('repo'));
    }
}
