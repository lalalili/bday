<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('wishing');
});

Route::get('/make', function()
{
    return View::make('make');
});

Route::group(array('prefix' => 'api'), function() {
    Route::resource('wishes', 'WishController',
        array('except' => array('create', 'edit', 'update')));
    Route::resource('mywishes', 'MywishController',
        array('except' => array('create', 'edit', 'update')));
    Route::resource('bdays', 'BdayController',
        array('except' => array('create', 'edit', 'update')));
});

App::missing(function($exception)
{
    return View::make('make');
});

