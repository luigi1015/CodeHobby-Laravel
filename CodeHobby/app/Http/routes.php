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

//Main web page routes
Route::group(['middleware' => 'throttle:30'], function ()
{
	Route::get( '/', 'CodeHobbyAppController@getHomepage' );
	Route::get( '/projects', 'CodeHobbyAppController@getProjects' );
	Route::get( '/contact', 'CodeHobbyAppController@getContact' );
	Route::post( '/contact', 'CodeHobbyAppController@postContact' );
	Route::get( '/ip', 'CodeHobbyAppController@getIP' );
	Route::get( '/json/ip', 'CodeHobbyAppController@getJSONIP' );
	Route::get( '/loremipsum', 'CodeHobbyAppController@getLoremIpsum' );
        Route::post( '/loremipsum', 'CodeHobbyAppController@postLoremIpsum' );

});

Route::group(['middleware' => ['auth', 'throttle:30']], function ()
{
	Route::get('/admin', 'CodeHobbyAppController@getAdmin');
	Route::post('/updateprojects', 'CodeHobbyAppController@postUpdateProjects');
});

//Auth (login/logout) info.
/*Show login*/
Route::get('/login', 'Auth\AuthController@getLogin');

/*Process login*/
Route::post('/login', 'Auth\AuthController@postLogin');

/*Process logout*/
Route::get('/logout', 'Auth\AuthController@logout');

/*Show logout confirmation*/
Route::get('/logout/confirm', 'Auth\AuthController@confirmLogout');
