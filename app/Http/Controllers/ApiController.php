<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApiController extends Controller
{
    //

    public function checkUsername($username){

        if (User::whereName($username)->first()){
            return 'false';
        }
        else{

            return 'true';
        }
    }

    public function checkEmail($email)
    {

        if (User::whereEmail($email)->first()) {
            return 'false';
        } else {

            return 'true';
        }
    }
}
