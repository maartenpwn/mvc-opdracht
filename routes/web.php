<?php

Auth::routes();

// For guests
Route::get('/', 'ExercisesController@index');
Route::get('/exercises/{exercise}', 'ExercisesController@show');

// Logged in only routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', 'ProfileController@index');
    Route::get('/create', 'ExercisesController@create');
    Route::get('/toggle/{exercise}', 'ExercisesController@toggle');
    Route::get('/home', 'HomeController@index')->name('home'); // Wanneer je inlogd

    Route::post('/create/exercise', 'ExercisesController@store');
    Route::post('/exercises/{exercise}/comment/create', 'CommentsController@store');
    // Route::post('/exercises/{exercise}/like', 'LikesController@like');

    Route::delete('/exercises/{exercise}/delete', 'ExercisesController@delete');


});

// Admin only routes
Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', 'AdminController@index');
});
