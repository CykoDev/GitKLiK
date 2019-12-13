<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\User;
use App\Repository;
use App\Git;

class RepoViewController extends Controller
{
    public function index($userName, $repoName) {
        $user = User::whereName($userName)->first();
        $repo = $user->repos()->whereName($repoName)->first();
        $stars = $repo->stars;

        $starUsers = [];
        foreach($stars as $star) {
            array_push($starUsers, $star->user);
        }

        $data = [
            'user' => $user,
            'stars' => $starUsers,
            'latestCommits' => [],
        ];

        $absoluteRepoPath = storage_path().'\app\repos\\'.$repoName.'\\';
        $relativeRepoPath = 'repos\\'.$repoName;
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

        $data['latestCommits']['directories'] = $directories;
        $data['latestCommits']['files'] = $files;

        return view('repoview', compact('data'));
    }
}
