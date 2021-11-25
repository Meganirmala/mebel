<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CeoController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\LandingPage\LandingController;
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
//     return view('landingpage.v_landingPage');
// });
Route::get('/', [LandingController::class, 'landing'])->name('landing');
Route::get('/detail/{id}', [LandingController::class, 'detail'])->name('detail');


Route::get('/signin', function () {
    return view('login');
});
// Route::resource('landing', LandingController::class);


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'index'])->name('index');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('account', AdminController::class);
    Route::get('/showUser/{id}', [AdminController::class, 'showUser'])->name('showUser');
    Route::get('/editUser/{id}', [AdminController::class, 'editUser'])->name('editUser');
    Route::put('/updateUser/{id}', [AdminController::class, 'updateUser'])->name('updateUser');
    Route::get('/seo', [SeoController::class, 'seo'])->name('seo');
    Route::post('/seo_store', [SeoController::class, 'seo_store'])->name('seo_store');


    
});
