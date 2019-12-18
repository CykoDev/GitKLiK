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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:repository-list|repository-create|repository-edit|repository-delete',
         					['only' => ['index','show']]);
         $this->middleware('permission:repository-create', ['only' => ['create','store']]);
         $this->middleware('permission:repository-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:repository-delete', ['only' => ['destroy']]);
    }

    
    public function edit(User $user, Repository $repo)
    {
        // return view('repos.edit');
    }

    public function update(UserRequest $request, User  $user)
    {

    }

    public function destroy(User  $user)
    {

    }
    

    /*
    |--------------------------------------------------------------------------
    | Display Functions
    |--------------------------------------------------------------------------
    */

    public function index(User $model)
    {
        return view('repos.index');
    }

    public function index_user(User $model)
    {
        return view('repos.index');
    }

    public function show($userName, $repoPath)
    {
        $pathElements = explode('||', $repoPath);
        $repoName = $pathElements[0];

        $targetPath = $repoName;
        for ($i = 1; $i < sizeof($pathElements); $i++) {
            $targetPath = $targetPath.'\\'.$pathElements[$i];
        }

        $user = User::whereName($userName)->first();
        $repo = $user->repos()->whereName($repoName)->first();
        $stars = $repo->stars;

        $starUsers = [];
        foreach($stars as $star) {
            array_push($starUsers, $star->user);
        }

        $absoluteRepoPath = storage_path().'\app\repos\clones\\'.$targetPath.'\\';
        $relativeRepoPath = 'repos\clones\\'.$targetPath;
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


    /*
    |--------------------------------------------------------------------------
    | Store Functions
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $user = Auth::user();
        $repoName = $request['repoName'];
        $repo = Repository::create([
            'user_id' => $user->id,
            'name' => $repoName,
            'description' => $request['repoDesc'],
            ]);
        User::findOrFail($user->id)->repos()->save($repo);


        if ($request->has('readme')) {
            Storage::put('repos/clones/'.$repoName.'/README.md', 'This is a readme file.');
        }
        if ($request->has('gitignore')) {
            Storage::put('repos/clones/'.$repoName.'/.gitignore', '');
        }
        return redirect('repo/'.$user->name.'/'.$repoName);
    }

    public function store_import(){


    }
   

    /*
    |--------------------------------------------------------------------------
    | Creation Functions
    |--------------------------------------------------------------------------
    */

    public function create_import(){


        $title = 'klik';
        $absolutePath = storage_path().'\app\public\repos\remotes\\'.$title.'.git\\';
        $data = [
            'title' => $title,
            'absolutePath' => $absolutePath,
        ];

        if (!Git::initBare($title)){
            return 'ERROR: git init bare error';
        }

        return view('repos.create_import', compact('data'));
    }

    public function create_import_end($name){

        if (!Git::cloneRemote($name)){
            return 'ERROR: git clone error';
        }

        return redirect(route('repo.view', [Auth::user()->name, $name]));
    }

    public function create()
    {
        return view('repos.create');
    }

    public function create_import()
    {
        return view('repos.create');
    }

    public function create_directory(Request $request)
    {
        $dir = $request['relPath'].'\\'.$request['dirName'];
        Storage::makeDirectory($dir);
        return back();
    }


    /*
    |--------------------------------------------------------------------------
    | Commit Functions
    |--------------------------------------------------------------------------
    */

    public function commit_index(){


    }

    public function commit_show(){


    }

    public function commit_create(){


    }

    public function commit_store(){


    }


    /*
    |--------------------------------------------------------------------------
    | Star Functions
    |--------------------------------------------------------------------------
    */

    public function stars(){


    }
}
