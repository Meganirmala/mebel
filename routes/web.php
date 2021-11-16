<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'index'])->name('index');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('account', AdminController::class);
    Route::get('/showUser/{id}', [AdminController::class, 'showUser'])->name('showUser');
    // Route::get('/destroy2/{id}', [ProductController::class, 'destroy2'])->name('destroy2');
    
});
