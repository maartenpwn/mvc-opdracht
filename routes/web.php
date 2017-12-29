<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exercises', 'ExercisesController@index');
Route::get('/exercises/{exercise}', 'ExercisesController@show');
