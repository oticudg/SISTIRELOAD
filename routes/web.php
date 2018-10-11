<?php
Route::auth();

Route::group(['middleware' => 'auth'], function () {
	Route::get('changePassword','Auth\ResetPasswordController@showChangePasswordForm');
	Route::post('changePassword','Auth\ResetPasswordController@changePassword')->name('changePassword');
	Route::any('states','IndexController@getStates');
	Route::any('municipalities','IndexController@getMunicipalities');
	Route::any('parishes','IndexController@getParishes');
	Route::any('foreigncountries','IndexController@getFcountries');
	Route::any('triages','IndexController@getTriages');
	Route::get('/','Auth\LoginController@ShowLoginForm');
	Route::resource('indexes', 'IndexController');
	Route::any('api/index', 'IndexController@apiIndex');

	Route::get('/sexchart', 'LaravelGoogleGraph@sex');
	Route::get('/triagechart', 'LaravelGoogleGraph@triage');
	Route::get('/docchart', 'LaravelGoogleGraph@doc');

	Route::group(['middleware' => ['auth','admin']], function () {
	Route::resource('user', 'UserController', [
	'except' => ['create']
	]);
	Route::get('api/user', 'UserController@apiUser')->name('api.user');
});
});


