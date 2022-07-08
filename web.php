<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StumessageController;
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
Route::resource('exboard',StumessageController::class);
Route::resource('texboard',TeamessageController::class);
