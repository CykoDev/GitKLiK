<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    //

    protected $fillable = [
        'user_id', 'name', 'description',
    ];



    /*
    |--------------------------------------------------------------------------
    | CRUD Relations
    |--------------------------------------------------------------------------
    */

    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function commits(){

    	return $this->hasMany('App\Commit');
    }

    public function stars(){

    	return $this->hasMany('App\Star');
    }

    public function photos(){

        return $this->morphMany('App\Photo', 'imageable');
    }

    public function tags(){

        return $this->belongsToMany('App\Tag');
    }
}
