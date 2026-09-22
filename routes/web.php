<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegistrationController;

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);

// Activity 5 routes
Route::view('/exercise-1', 'exercise1');
Route::view('/exercise-2', 'exercise2');
Route::view('/exercise-3', 'exercise3');
Route::view('/exercise-4', 'exercise4');

Route::get('/register', [RegistrationController::class, 'showForm']);