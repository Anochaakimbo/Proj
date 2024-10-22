<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController2;
use App\Http\Controllers\facultyController;
use App\Http\Controllers\companyController;
use App\Http\Controllers\studentController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('student',[studentController::class,"index"])->name('student');

Route::post('student/insert',[studentController::class,"insert"]);

Route::get('movie',[MovieController2::class,"index"]);

Route::get('faculty',[facultyController::class,"index"]);

Route::get('company',[companyController::class,"index"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('student/delete/{std_id}',[studentController::class,"delete"])->name('deletestd');


Route::post('student/updated',[studentController::class,"updatedStudent"])->name('updatestd');

Route::get('student/updated/{std_id}',[studentController::class,"index"])->name('updatestdurl');
