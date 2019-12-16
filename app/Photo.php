<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Photo extends Model
{
    //

	use SoftDeletes;

	protected $dates = ['deleted_at'];

    protected $fillable = [
    	'path', 'type',
    ];


    public function imageable(){

    	return $this->morphTo();
    }
}
