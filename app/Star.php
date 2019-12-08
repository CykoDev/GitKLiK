<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    //


    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function repository(){

    	return $this->belongsTo('App\Repository');
    }
}
