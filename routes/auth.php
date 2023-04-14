<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function(){
    Route::get('login',[LoginController::class,'create'])->name('login');
    Route::get('register',[RegisterController::class,'create'])->name('register');
    Route::post('register',[RegisterController::class,'store'])->name('register');
    Route::post('/login',[LoginController::class,'login'])->name('login');
  
});
Route::middleware('auth')->group(function(){
    Route::post('/logout',[LoginController::class,'destroy'])->name('logout');
});