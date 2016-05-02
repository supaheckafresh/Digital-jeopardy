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

Route::get('/', 'CategoryController@index');

Route::post('add/new', 'CategoryController@store');

Route::get('show/{category}', 'CategoryController@show');

Route::post('add/{category}/new', 'QuestionController@store');

Route::post('add/{category}/img', 'QuestionController@image');

Route::get('edit/{question}', 'QuestionController@edit');

Route::get('/game-menu', 'GameController@menu');

Route::get('/play', 'GameController@play');

Route::get('get-categories', 'GameController@getGameData');

Route::get('/home', 'HomeController@index');

Route::get('/start', 'GameController@controller');
