<?php

Route::get('/', 'ExercisesController@index');
// Route::get('/exercises/{exercise}', 'ExercisesController@show');

// Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Form
Route::get('/create', 'ExercisesController@create');
Route::post('/home', 'ExercisesController@store');
