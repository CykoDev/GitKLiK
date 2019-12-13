<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    protected $fillable = [ 'name' ];


     /*
    |--------------------------------------------------------------------------
    | CRUD Relations
    |--------------------------------------------------------------------------
    */

    public function repos(){

    	return $this->belongsToMany('App\Repository');
    }
}
