<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    //



    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function commits(){

    	return $this->hasMany('App\Commit');
    }

    public function stars(){

    	return $this->hasMany('App\Star');
    }
}
