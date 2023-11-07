<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\FacultyController;

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
    return view('welcome');
});

Route::resource('/prodis', ProdiController::class);


Route::resource('/faculties', FacultyController::class);
