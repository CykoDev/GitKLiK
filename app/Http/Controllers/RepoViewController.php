<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Repository;

class RepoViewController extends Controller
{
    //
    public function index(Repository $repo) {
        $commits = $repo->commits;
        $stars = $repo->stars;
        echo '<h1>Commits</h1>';
        foreach($commits as $commit) {
            echo '<p>'.$commit.'</p>';
        }
        echo '<h1>Stars</h1>';
        foreach($stars as $star) {
            echo '<p>'.$star.'</p>';
        }
    }
}
