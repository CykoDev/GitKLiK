<?php

namespace App\Http\Controllers;

use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $user    = User::findOrFail(Auth::user()->id);
        $commits = $user->commits;
        $repos   = $user->repos;
        $stars   = $user->stars;

        $commitHistory = [
            'weekly'  => [

            ],
            'monthly' => [

            ],
        ];
        
        $data    = [
                    'user'    => $user, 
                    'commits' => $commits, 
                    'repos'   => $repos, 
                    'stars'   => $stars
                ];

        return view('dashboard', compact('data'));
    }
}
