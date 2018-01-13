<?php

Route::get('/', 'ExercisesController@index');
Route::get('/exercises/{exercise}', 'ExercisesController@show');
Route::get('/exercises/{exercise}/delete', 'ExercisesController@delete');

// Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Form
Route::get('/create', 'ExercisesController@create');
Route::post('/home', 'ExercisesController@store');
