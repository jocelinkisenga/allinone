<?php

use App\Http\Controllers\Admin\Company\CompanyController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Manager\ManagerController;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::get('/admin',[HomeController::class,'index'])->name('admin.dashboard');
    Route::get('/compagnies',[CompanyController::class,'index'])->name("admin.compagnies");
    Route::get('/managers',[ManagerController::class,'index'])->name('admin.manager');

    // manager actions routes
    Route::get('/manager/Activate/{id}',[ManagerController::class,'activer'])->name('manager.activer');
    Route::get('/manager/Deactivate/{id}',[ManagerController::class,'desactiver'])->name('manager.desactiver');

    // compagnie actions routes
    Route::get('/company/activate/{id}',[CompanyController::class,'activer'])->name('company.activer');
    Route::get('/company/deactivate/{id}',[CompanyController::class,'desactiver'])->name('company.desactiver');
    Route::get('/company/{id}',[CompanyController::class,'show'])->name('company.show');

    Route::post('/compagnie',[CompanyController::class,'store'])->name('admin.company.store');

    Route::get('/orders',[OrderController::class,'index'])->name('admin.orders');
});

