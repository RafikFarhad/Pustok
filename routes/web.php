<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/farhad', function () {
    return view('/WelcomePage/index');
});

Auth::routes();

// Route::get('/home', 'HomeController@index');
Route::get('/register', function () {
    return view('/auth/register');
});

Route::post('/login', 'HomeController@create_user');

Auth::routes();

Route::get('/home', 'HomeController@index');
