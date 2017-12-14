<?php

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
Route::any('states','IndexController@getStates');
Route::any('municipalities','IndexController@getMunicipalities');
Route::any('parishes','IndexController@getParishes');
Route::get('/','Auth\LoginController@ShowLoginForm');
Route::auth();

Route::group(['middleware' => 'auth'], function () {

	Route::resource('indexes', 'IndexController');
	Route::any('api/index', 'IndexController@apiIndex');

		

	Route::get('change-password', function() {return view('admin.users.change-password'); });
	Route::post('change-password', 'UpdatePasswordController@update');				
		

 		//users
		Route::get('users','UsersController@index');
		Route::get('users-data', 'UsersController@data');
			
			Route::resource('users','UsersController');

			Route::get('users/{id}/destroy', [
				'uses' => 'UsersController@destroy',
				'as' => 'users.destroy'
				]);

});
