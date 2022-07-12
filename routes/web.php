<?php

use Illuminate\Support\Facades\Route;

Route::get('/','Auth\AuthController@index')->name('auth.login');
Route::post('/','Auth\AuthController@login')->name('auth.login');

Route::get('home','HomeController@index')->name('home.index');


Route::get('/api/v1/externa','Auth\AuthController@extena');


// Route::get('posts','PostController@index')->name('posts.index');

// Route::get('posts/create','PostController@create')->name('posts.create');

// Route::post('posts','PostController@store')->name('posts.store');

// Route::get('posts/{id}','PostController@show')->name('posts.show');

// Route::put('posts/{id}','PostController@update')->name('posts.update');
// // Route::put('posts/','PostController@index')->name('posts.index');

// Route::delete('posts/{id}','PostController@delete')->name('posts.delete');


// // GET /usuarios
// Route::get('users','UserController@index')->name('users.index');
// Route::get('users/{id}','UserController@show')->name('users.show');
// Route::post('users','UserController@store')->name('users.store');
// Route::put('users/{id}','UserController@update')->name('users.update');
// Route::delete('users/{id}','UserController@destroy')->name('users.destroy');
