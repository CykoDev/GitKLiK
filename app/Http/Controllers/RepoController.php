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

    public function index(User $model)
    {
        return view('repos.index');
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $targetPath = 'directory';
        $repo = Repository::create([
            'user_id' => Auth::user()->id,
            'name' => $targetPath,
            'description' => 'Some description this is',
            ]);
        User::findOrFail(Auth::user()->id)->repos()->save($repo);

        Storage::makeDirectory('repos/clones'.$targetPath);
        Storage::put('repos/clones'.$targetPath.'/README.md', 'This is a readme file.');
        $absoluteRepoPath = storage_path().'\app\repos\\'.$targetPath.'\\';
        // return view('repos.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
            'user' => $user,
            'repo' => $repo,
            'latestCommits' => [],
        ];

        $data['latestCommits']['directories'] = $directories;
        $data['latestCommits']['files'] = $files;

        return view('repos.show', compact('data'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(User $user, Repository $repo)
    {
        return view('repos.edit');
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User  $user)
    {
    }

    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User  $user)
    {
    }


    public function createImport(){


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

    public function createImportEnd($name){

        if (!Git::cloneRemote($name)){
            return 'ERROR: git clone error';
        }

        return redirect(route('repo.view', [Auth::user()->name, $name]));
    }
}
