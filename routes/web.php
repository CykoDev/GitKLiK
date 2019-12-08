<?php

use Illuminate\Support\Facades\Storage;

use App\User;
use App\Repository;
use App\Commit;


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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', function () {
	
    return '<h1>This is profile page</h1>';
})->middleware('verified');

Route::get('/bat', function(){


	$output = explode(" ", shell_exec('git show --raw '));

	$i = 0;
	while($i<sizeof($output)){


		$output[$i] = explode(" ", $output[$i]);

		$i+=1;
	}

	return $output;
});


Route::get('/user/{id}/repository', function($id){

	$user = User::findOrFail($id);

	foreach($user->repositories as $repo){

		echo $repo.'<br>';
	}
});

Route::get('/user/{id}/commit', function($id){

	$user = User::findOrFail($id);
	
	foreach($user->commits as $commit){

		echo $commit.'<br>';
	}
});

Route::get('/repo/{id}/commit', function($id){

	$repo = Repository::findOrFail($id);
	
	foreach($repo->commits as $commit){

		echo $commit.'<br>';
	}
});
