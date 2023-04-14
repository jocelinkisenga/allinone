<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\Category\CategoryFrontController;
use App\Http\Controllers\Frontend\Company\CompanyFrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home');

//Route::get('/{slug}/{id}',[CompanyFrontController::class,'index'])->name('company');

require __DIR__.'/admin.php';
require __DIR__.'/manager.php';
require __DIR__.'/auth.php';