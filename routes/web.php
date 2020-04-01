<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'PagesController@home' );
Route::get('/about', 'PagesController@about' );

// Read All
// Route::get('/student', 'StudentsController@index');
// Route::get('/student/create', 'StudentsController@create');

// // Read by id
// Route::get('/student/{id}', 'StudentsController@show');

// // Insert
// Route::post('/student', 'StudentsController@store');

// // Edit
// Route::get('/student/{id}/edit', 'StudentsController@edit');
// Route::patch('/student/{id}', 'StudentsController@update');

// // Delete
// Route::delete('/student/{id}', 'StudentsController@destroy');

// Route  Powerfull
Route::resource('student', 'StudentsController');





