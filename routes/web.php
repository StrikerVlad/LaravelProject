<?php

use App\User;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/**
 * Route auth
 */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/news/{news}/status', 'NewsController@changeNewsStatus');

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::resource('/user', 'UserController')->names('user');
    Route::resource('/news', 'NewsController')->names('news');
});

Route::get('/gallery', function () {
    return view('wrapper.gallery');
})->name('gallery');

Route::get('/generic', function () {
    $users = User::where('is_admin', 0)->get();
    return view('wrapper.generic', compact('users'));
})->name('generic');

Route::get('getallnews', 'NewsController@getAllNews')->name('getallnews');
Route::get('/news/{news}/show', 'NewsController@showNews')->name('shownews');
