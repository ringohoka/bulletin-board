<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\exboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StumessageController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeamessageController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exboard', [exboardController::class, 'index']);
Route::post('/exboard', [exboardController::class, 'post']);
Route::resource('/exboard',StudentController::class);
Route::resource('/exboard',StumessageController::class);
Route::resource('/exboard',SubjectController::class);
Route::resource('/exboard',TeacherController::class);
Route::resource('/exboard',TeamessageController::class);
