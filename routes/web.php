<?php

Route::group([], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
Route::get('post/create', 'PostController@create');

Route::post('post', 'PostController@store');
