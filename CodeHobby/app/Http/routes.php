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
	Route::get( '/', 'CodeHobbyAppController@getHomepage' )->name('home');
	Route::get( '/projects', 'CodeHobbyAppController@getProjects' );
	Route::get( '/contact', 'CodeHobbyAppController@getContact' );
	Route::post( '/contact', 'CodeHobbyAppController@postContact' );
	Route::get( '/ip', 'CodeHobbyAppController@getIP' );
	Route::get( '/json/ip', 'CodeHobbyAppController@getJSONIP' );
	Route::get( '/loremipsum', 'CodeHobbyAppController@getLoremIpsum' );
	Route::post( '/loremipsum', 'CodeHobbyAppController@postLoremIpsum' );
	Route::get( '/reference', 'CodeHobbyAppController@getReference' );
	Route::get( '/browserdata', 'CodeHobbyAppController@getBrowserData' );
	Route::get( '/randomdata', 'CodeHobbyAppController@getRandomData' );
	Route::post( '/randomdata', 'CodeHobbyAppController@postRandomData' );
	Route::get( '/time', 'CodeHobbyAppController@getTime' );
	Route::get( '/csscolors', 'CodeHobbyAppController@getCssColors' );
	Route::get( '/japanese', 'CodeHobbyAppController@getJapanese' );
	Route::get( '/htmlref', 'CodeHobbyAppController@getHtmlref' );
});

Route::group(['middleware' => ['auth', 'throttle:30']], function ()
{
	Route::get('/admin', 'CodeHobbyAppController@getAdmin');
	Route::post('/updateprojects', 'CodeHobbyAppController@postUpdateProjects');
	Route::get('/eastereggs', 'CodeHobbyAppController@getEasterEggs');
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
