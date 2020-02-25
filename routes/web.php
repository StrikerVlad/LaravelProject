<?php

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/**
 * Route auth
 */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/user', 'UserController')->names('user');
