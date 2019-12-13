<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
