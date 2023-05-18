<?php

use App\Http\Controllers\Admin\Manager\ManagerController;
use App\Http\Controllers\Manager\Category\CategoryController;
use App\Http\Controllers\Manager\Commande\CommandeController;
use App\Http\Controllers\Manager\Company\CompanyController;
use App\Http\Controllers\Manager\HomeController;
use App\Http\Controllers\Manager\Product\ProductController;
use Illuminate\Support\Facades\Route;

 Route::middleware('auth','manager')->prefix('manager')->group(function(){
    Route::get('/',[HomeController::class,'index'])->name('manager.dashboard');
    Route::get('/compagnies',[CompanyController::class,'index'])->name('manager.compagnies');
    Route::get('/categories',[CategoryController::class,'index'])->name('manager.categories');
    Route::get('/products',[ProductController::class,'index'])->name('manager.products');
    Route::get('/comandes',[CommandeController::class,'index'])->name('manager.commandes');

    Route::get('/company/{id}',[CompanyController::class,'show'])->name('manager.company.details');
    Route::get('/product/{id}',[ProductController::class,'edit'])->name('manager.product.edit');
    Route::get('/commande/{id}',[CommandeController::class,'show'])->name('manager.commade.details');
    Route::get('/delete/{id}',[ProductController::class,'delete'])->name('manager.product.delete');
    //POST METHODS


    Route::post('/categorie',[CategoryController::class,'store'])->name('manager.categorie.store');
    Route::post('/product',[ProductController::class,'store'])->name('manager.product.store');
    Route::post('/products',[ProductController::class,'update'])->name('manager.product.update');
    Route::get('/livrer/{id}',[CommandeController::class,'confirmer'])->name('manager.commande.confirmer');


});
