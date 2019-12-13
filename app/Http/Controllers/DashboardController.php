<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $repos = User::findOrFail(Auth::user()->id)->repos;
        $commits = User::findOrFail(Auth::user()->id)->commits;
        $stars = User::findOrFail(Auth::user()->id)->stars;
        echo '<h1>Repositories</h1>';
        foreach($repos as $repo) {
            echo '<p>'.$repo.'</p>';
        }
        echo '<br><h1>Commits</h1>';
        foreach($commits as $commit) {
            echo '<p>'.$commit.'</p>';
        }
        echo '<br><h1>Stars</h1>';
        foreach($stars as $star) {
            echo '<p>'.$star.'</p>';
        }
    }
}
