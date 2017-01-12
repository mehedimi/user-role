<?php

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



Route::auth();

Route::get('/', [
	'middleware' => ['auth', 'permission:user.show'],
	'uses' => 'UserController@index'
]);

Route::get('/user/{user}/edit', [
	'middleware' => ['auth', 'permission:user.edit'],
	'uses' => 'UserController@edit'
]);

Route::get('/user/{user}/role', [
	'uses' => 'RoleController@index',
	'as' => 'role.index'
]);
Route::get('user/roles', [
	'uses' => 'RoleController@getRoles',
	'as' => 'roles.index'
]);

Route::get('/home', 'HomeController@index');
Route::get('/role/{role}/permissions', 'PermissionController@index')->name('role.permissions');
