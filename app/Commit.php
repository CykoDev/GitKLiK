<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commit extends Model
{
    //

	protected $fillable = [
		'repository_id', 'hex_code', 'name', 'branch', 
		'message', 'author'
	];



    /*
    |--------------------------------------------------------------------------
    | CRUD Relations
    |--------------------------------------------------------------------------
    */

    public function repository(){

    	return $this->belongsTo('App\Repository');
    }

	public function user(){

        return $this->belongsToThrough('App\User', 'App\Repository');
    } 
}
