<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login','App\Http\Controllers\API\AuthController@login');


Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/logout','App\Http\Controllers\API\AuthController@logout');
    Route::get('/classes','App\Http\Controllers\API\ClassController@index');
    Route::get('/specific-class/{id}','App\Http\Controllers\API\ClassController@specificClass');
    Route::post('/delete-specific-class/{id}','App\Http\Controllers\API\ClassController@deleteClass');
    Route::post('/add-class','App\Http\Controllers\API\ClassController@addClass');
    Route::get('/view-current-term-classes','App\Http\Controllers\API\ClassController@viewCurrentTermClasses');
    Route::post('/edit-class/{id}','App\Http\Controllers\API\ClassController@editClass');// this should be added to postman
    Route::get('/view-all-students','App\Http\Controllers\API\StudentController@index');
    Route::get('/view-specific-student/{id}','App\Http\Controllers\API\StudentController@showSpecificStudent');
    Route::get('/view-students-in-class/{id}','App\Http\Controllers\API\StudentController@showStudentInClass');
    Route::post('create-student','App\Http\Controllers\API\StudentController@createStudent');
    Route::post('delete-student/{id}','App\Http\Controllers\API\StudentController@deleteStudent'); //this should be added to postman
    Route::post('edit-student/{id}','App\Http\Controllers\API\StudentController@editStudent'); //this should be added to postman
    Route::post('create-event','App\Http\Controllers\API\EventController@createEvent');//this should be added to postman
    Route::post('delete-event/{id}','App\Http\Controllers\API\EventController@deleteEvent');//this should be added to postman
    Route::get('view-all-events','App\Http\Controllers\API\EventController@index');// this should be added to postman
    Route::get('view-specific-event/{id}','App\Http\Controllers\API\EventController@showSpecificEvent');// this should be added to postman
    Route::post('edit-event/{id}','App\Http\Controllers\API\EventController@editEvent');// this should be added to postman




});




