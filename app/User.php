<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;



class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, SoftDeletes, HasRoles;


    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'full_name', 'headline', 'bio',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /*
    |--------------------------------------------------------------------------
    | Mutators | Accessors
    |--------------------------------------------------------------------------
    */

    public function setPasswordAttribute($value){

        $this->attributes['password'] = Hash::make($value);
    }


   /*
    |--------------------------------------------------------------------------
    | CRUD Relations
    |--------------------------------------------------------------------------
    */

    public function repos(){

        return $this->hasMany('App\Repository');
    }

    public function commits(){

        return $this->hasManyThrough('App\Commit', 'App\Repository');
    }

    public function stars(){

        return $this->hasMany('App\Star');
    }

    public function photos(){

        return $this->morphMany('App\Photo', 'imageable');
    }

    public function profilePhoto(){

        return $this->morphMany('App\Photo', 'imageable')->whereType('profilePhoto')->firstOrFail();
    }

    public function profileBanner()
    {

        return $this->morphMany('App\Photo', 'imageable')->whereType('profileBanner');
    }

}
