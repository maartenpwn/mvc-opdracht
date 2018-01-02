<?php

Route::get('/', 'ExercisesController@index');
Route::get('/exercises/{exercise}', 'ExercisesController@show');

// Login routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
