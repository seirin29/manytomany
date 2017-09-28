<?php
use App\Role;
use	App\User;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    $user = User::find(2);
	$role = new Role(['name'=>'Administrator']);
	$user->roles()->save($role);
});

Route::get('/read', function () {
    $user = User::findorFail(2);
	//dd($user->roles);
	foreach($user->roles as $role){
		//dd($role);
		echo $role->name;
	}
});







