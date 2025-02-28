<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/register/step1', [RegisterController::class, 'registerStep1']);
Route::post('register/step1', [RegisterController::class, 'postStep1']);
Route::get('/register/step2', [RegisterController::class, 'registerStep2']);
Route::post('/register/step2', [RegisterController::class, 'completeRegistration']);
Route::get('/weight_logs', [RegisterController::class, 'index']);
Route::post('/weight_logs', [RegisterController::class, 'store']);
Route::get('/login', [RegisterController::class, 'login']);
Route::get('/weight_logs/create', [RegisterController::class, 'create']);
Route::post('/weight_logs/create', [RegisterController::class, 'store']);//同じアクションになるのあり？