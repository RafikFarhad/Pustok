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



Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/addbook', 'addbookcontroller@index');
Route::post('/addbook', 'addbookcontroller@savethebook');


