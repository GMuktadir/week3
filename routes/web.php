<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::fallback(function () {
    return response()->view('error', [], 404);
});
Route::get('/home',[HomeController::class, 'index']);
Route::get('/project',[ProjectController::class, 'index']);
Route::get('/resume',[ResumeController::class, 'index']);
Route::get('/contact',[ContactController::class, 'index']); 
Route::post('/contact_submit',[ContactController::class, 'submit']); 