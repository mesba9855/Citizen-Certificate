<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'HomeIndex']);
Route::get('/Apply', [ApplyController::class, 'ApplyIndex']);
Route::get('/Notice', [ReviewController::class, 'NoticeIndex']);
Route::get('/Contact', [ContactController::class, 'ContactIndex']);
Route::get('/About', [AboutController::class, 'AboutIndex']);

Route::get('/Login', [loginController::class, 'LoginIndex']);

Route::post('/RegistrationApply', [ApplyController::class, 'RegistrationApply']);
