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

Route::GET('/', function () {
    return view('welcome');
});

Route::GET('/demotheme', function () {
    return view('/WelcomePage/index');
});

Auth::routes();

// Route::GET('/home', 'HomeController@index');
Route::GET('/register', function () {
    return view('/auth/register');
});



Auth::routes();

Route::GET('/home', 'HomeController@index');
Route::GET('/addbook', 'addbookcontroller@index');
Route::POST('/addbook', 'addbookcontroller@savethebook');

Route::GET('/status', 'statuscontroller@index');
Route::POST('/status', 'statuscontroller@showstatus');


Route::GET('/lendbook', 'lendbookcontroller@index');
Route::POST('/lendbook', 'lendbookcontroller@showstatusoflendingbook');




