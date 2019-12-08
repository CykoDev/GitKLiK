<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commit extends Model
{
    //

    public function repository(){

    	return $this->belongsTo('App\Repository');
    }

	public function user(){

        return $this->belongsToThrough('App\User', 'App\Repository');
    } 
}
