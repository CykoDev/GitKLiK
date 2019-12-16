<?php

use Illuminate\Support\Facades\Storage;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});

Route::get('repo/{userName}/{repoPath}', ['as' => 'repo', 'uses' => 'RepoController@show']);

Auth::routes(['verify' => true]);

Route::group(['middleware' => 'verified'], function () {

	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('user', 'UserController');

	Route::resource('roles','RoleController');
	Route::resource('tags','TagController');
	// Route::resource('repo/{userName}/{repoName}','RepoController');
	Route::resource('commit','CommitController', ['except' => ['edit']]);

	Route::resource('photo','PhotoController', ['except' => ['create']]);

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('user', 'UserController', ['except' => ['show']]);

    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});




/*
|--------------------------------------------------------------------------
| Test Routes
|--------------------------------------------------------------------------
*/


Route::get('/test/bat', function(){


	$output = explode(" ", shell_exec('git show --raw '));

	$i = 0;
	while($i<sizeof($output)){


		$output[$i] = explode(" ", $output[$i]);

		$i+=1;
	}

	return $output;
});
