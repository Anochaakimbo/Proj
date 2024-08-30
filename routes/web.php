<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController2;
use App\Http\Controllers\facultyController;
use App\Http\Controllers\companyController;
Route::get('/', function () {
    return view('welcome');
});

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
