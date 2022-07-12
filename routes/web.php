<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcomme');
});


Route::get('posts','PostController@index')->name('posts.index');

Route::get('posts/create','PostController@create')->name('posts.create');

Route::post('posts','PostController@store')->name('posts.store');

Route::get('posts/{id}','PostController@show')->name('posts.show');

Route::put('posts/{id}','PostController@update')->name('posts.update');
// Route::put('posts/','PostController@index')->name('posts.index');

Route::delete('posts/{id}','PostController@delete')->name('posts.delete');
