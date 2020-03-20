<?php

// Closure View
Route::get('/', function () {
    return view('dashboard');
});


// Manual Route
Route::get('/student', 'StudentController@index');
Route::post('/student', 'StudentController@store');
Route::get('/student/create', 'StudentController@create');
Route::get('/student/{student}', 'StudentController@show');
Route::patch('/student/{student}', 'StudentController@update');
Route::get('/student/{student}/edit', 'StudentController@edit');
Route::delete('/student/{student}', 'StudentController@destroy');


// Route List Resource
// Route::resource('student', 'StudentController'); 