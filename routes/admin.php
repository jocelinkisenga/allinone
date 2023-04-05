<?php

use App\Http\Controllers\Admin\Company\CompanyController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Manager\ManagerController;
use Illuminate\Support\Facades\Route;

Route::get('/admin',[HomeController::class,'index'])->name('admin.dashboard');
Route::get('/compagnies',[CompanyController::class,'index'])->name("admin.compagnies");
Route::get('/managers',[ManagerController::class,'index'])->name('admin.manager');