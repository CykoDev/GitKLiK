<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;



class Photo extends Model
{
    //

    use SoftDeletes;

    public $directory = '/images/';

	protected $dates = ['deleted_at'];

    protected $fillable = [
    	'path', 'type',
    ];

    public function getPathAttribute($value)
    {

        return Storage::url($this->directory . $value);
    }


    public function imageable(){

    	return $this->morphTo();
    }
}
