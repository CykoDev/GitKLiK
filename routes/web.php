<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes(['verify' => true]);

Route::get('/', function () {

    return view('welcome');
});



/*
|--------------------------------------------------------------------------
| Repository Routes
|--------------------------------------------------------------------------
*/

Route::get('/repo', ['as'=> 'repo.index', 'uses' => 'RepoController@index']);
Route::get('/repo/{userName}', ['as'=> 'repo.index.user', 'uses' => 'RepoController@index_user']);
Route::get('/repo/{userName}/{repoName}', ['as'=> 'repo.show', 'uses' => 'RepoController@show']);
Route::get('/repo/{userName}/{repoName}/stars', ['as'=> 'repo.stars', 'uses' => 'RepoController@stars']);
Route::get('/repo/{userName}/{repoName}/commits', ['as'=> 'repo.commit.index', 'uses' => 'RepoController@commit_index']);
Route::get('/repo/{userName}/{repoName}/commits/{commitCode}', ['as'=> 'repo.commit.show', 'uses' => 'RepoController@commit_show']);
Route::get('/repo/{userName}/{repoName}/file', ['as'=> 'repo.file.show', 'uses' => 'RepoController@file_show']);

Route::group(['middleware' => 'verified'], function (){

    Route::get('/repo/{userName}/create', ['as '=> 'repo.create', 'uses' => 'RepoController@create']);
    Route::get('/repo/{userName}/create/import', ['as' => 'repo.create.import', 'uses' => 'RepoController@create_import']);
    Route::get('/repo/{userName}/{repoName}/edit', ['as'=> 'repo.edit', 'uses' => 'RepoController@edit']);
    Route::get('/repo/{userName}/{repoName}/file/edit', ['as'=> 'repo.file.edit', 'uses' => 'RepoController@edit_file']);

    Route::post('/repo/{userName}/{repoName}/create/dir', ['as' => 'repo.create.dir', 'uses' => 'RepoController@create_directory']);
    Route::post('/repo/{userName}/{repoName}', ['as' => 'repo.store', 'uses' => 'RepoController@store']);
    Route::post('/repo/{userName}/{repoName}/import', ['as'=> 'repo.store.import', 'uses' => 'RepoController@store_import']);
    Route::post('/repo/{userName}/{repoName}/file', ['as'=> 'repo.file.update', 'uses' => 'RepoController@file_update']);

    Route::put('/repo/{userName}/{repoName}/edit', ['as'=> 'repo.update', 'uses' => 'RepoController@update']);
    Route::delete('/repo/{userName}/{repoName}', ['as'=> 'repo.destroy', 'uses' => 'RepoController@destroy']);
    Route::delete('/repo/{userName}/{repoName}/file', ['as'=> 'repo.file.destroy', 'uses' => 'RepoController@destroy_file']);

    Route::get('/repo/{userName}/{repoName}/commits/create', ['as'=> 'repo.commit.create', 'uses' => 'RepoController@commit_create']);
    Route::post('/repo/{userName}/{repoName}/commits/store', ['as'=> 'repo.commit.store', 'uses' => 'RepoController@commit_store']);
});



/*
|--------------------------------------------------------------------------
| User/Profile Routes
|--------------------------------------------------------------------------
*/

Route::get('profile', ['as' => 'profile.show', 'uses' => 'ProfileController@show']);

Route::group(['middleware' => 'verified'], function () {

    Route::resource('user', 'UserController', ['except' => ['show']]);

    Route::get('profile/edit', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile/edit', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});



/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'verified'], function () {

    Route::get('/home',  ['as' => 'home', 'uses' => 'HomeController@index']);
	Route::resource('roles','RoleController');
	Route::resource('tags','TagController');

});



/*
|--------------------------------------------------------------------------
| Test Routes
|--------------------------------------------------------------------------
*/

Route::get('/test/general', function() {
    return view('errors.general');
});
