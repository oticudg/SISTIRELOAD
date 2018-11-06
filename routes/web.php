<?php
Route::auth();

Route::group(['middleware' => 'auth'], function () {
	

	Route::get('/','Auth\LoginController@ShowLoginForm');
	Route::get('changePassword','Auth\ResetPasswordController@showChangePasswordForm');
	Route::post('changePassword','Auth\ResetPasswordController@changePassword')->name('changePassword');
	Route::group(['middleware' => ['auth','admin']], function () {
	Route::resource('user', 'UserController', [
	'except' => ['create']
	]);
	Route::get('api/user', 'UserController@apiUser')->name('api.user');
	});

	Route::resource('indexes', 'IndexController');
	Route::any('api/index', 'IndexController@apiIndex');
	Route::any('triages','IndexController@getTriages');	

	Route::resource('newindexes', 'NewIndexController');
	Route::any('api/newindex', 'NewIndexController@apiNewIndex');
	Route::any('states','NewIndexController@getStates');
	Route::any('municipalities','NewIndexController@getMunicipalities');
	Route::any('parishes','NewIndexController@getParishes');
	Route::any('foreigncountries','NewIndexController@getFcountries');
	Route::any('triages','NewIndexController@getTriages');

	Route::get('/sexchart', 'LaravelGoogleGraph@sex');
	Route::get('/triagechart', 'LaravelGoogleGraph@triage');
	Route::get('/docchart', 'LaravelGoogleGraph@doc');
});



