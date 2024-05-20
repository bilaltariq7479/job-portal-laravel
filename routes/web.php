<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function () {
    return view('user.index');
});
Route::get('/users',[TestController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/contact/store',[ContactController::class,'store']);
Route::get('/register/seeker',[UserController::class,'createSeeker'])->name('create.seeker');
Route::post('/register/seeker',[UserController::class,'storeSeeker'])->name('store.seeker');
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('verified');
Route::post('/login',[UserController::class,'postlogin'])->name('login.post');
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
Route::post('/logout',[UserController::class,'logout'])->name('logout.post');
Route::get('/register/employer',[UserController::class,'createEmployer']);
Route::post('/register/employer',[UserController::class,'storeEmployer'])->middleware('verified')->name('store.employer');
Route::get('/verify',[DashboardController::class,'verify'])->name('verification.notice');