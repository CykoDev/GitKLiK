<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


use App\Photo;
use Image;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'      => ['required', 'string', 'max:255', 'unique:users'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // $request = app('request');
        if (isset($data['file'])) {

            // $filename = $file->getClientOriginalName();
            // $file->move('images', $name);

            $avatar = $data['avatar'];
            $filename = time() . '.' . $avatar->getClientOriginalExtension();

            // $absolutePath = storage_path() . '\app\public\repos\remotes\\' . $title . '.git\\';
            $img = Image::make($avatar->getRealPath());
            $img->stream();

            // Image::make($avatar)->save(storage_path('app\public\images\\' . $filename));
            Storage::disk('local')->put('public/images/' . $filename, $img, 'public');
        }
        else {

            $filename = 'defaultUser.png';
        }

        $user = User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => $data['password'],
            'full_name' => $data['full_name'],
            'headline'  => $data['headline'],
            'bio'       => $data['bio'],
        ]);
        $user->photos()->save(Photo::create([
            'path' => $filename,
            'type' => 'profilePhoto',
        ]));

        return $user;
    }
}
