<?php

use Illuminate\Support\Facades\Route;
Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('courses', CourseController::class);

// Dashboard route
Route::get('/', function () {
    return view('dashboard');
});

// Resource routes for CRUD
Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('courses', CourseController::class);
