<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});



Route::get('/all-classes', function () {
    return view('all-classes');
});


Route::get('/add-student', function () {
    return view('add-student');
});

Route::get('/add-class', function () {
    return view('add-class');
});


Route::get('/all-students', function () {
    return view('all-students');
});

Route::get('/class-details', function () {
    return view('class-details');
});

Route::get('/current-classes', function () {
    return view('current-classes');
});

Route::get('/doctor-schedule', function () {
    return view('doctor-schedule');
});

Route::get('/edit-class', function () {
    return view('edit-class');
});

Route::get('/edit-student', function () {
    return view('edit-student');
});

Route::get('/specific-student', function () {
    return view('specific-student');
});

Route::get('/take-attendance', function () {
    return view('take-attendance');
});

Route::get('/view-attendance', function () {
    return view('view-attendance');
});

