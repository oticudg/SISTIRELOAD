<?php

Route::auth();

Route::group(['middleware' => 'auth'], function () {
	Route::any('states','IndexController@getStates');
	Route::any('municipalities','IndexController@getMunicipalities');
	Route::any('parishes','IndexController@getParishes');
	Route::any('foreigncountries','IndexController@getFcountries');
	Route::any('triages','IndexController@getTriages');
	Route::get('/','Auth\LoginController@ShowLoginForm');
	Route::resource('indexes', 'IndexController');
	Route::any('api/index', 'IndexController@apiIndex');
	Route::get('change-password', function() {return view('admin.users.change-password'); });
	Route::post('change-password', 'UpdatePasswordController@update');				
	Route::get('users','UsersController@index');
	Route::get('users-data', 'UsersController@data');		
	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy', [
				'uses' => 'UsersController@destroy',
				'as' => 'users.destroy'
				]);
});
