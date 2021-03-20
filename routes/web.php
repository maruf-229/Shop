<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ProductController;
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


Route::get('/',[Frontend::class,'index'])->name('home');
Route::get('/categories', [Frontend::class ,'category'])->name('frontend.category');
Route::get('/products/{id}', [Frontend::class,'product'])->name('frontend.category.product');
Route::get('/show/{id}', [Frontend::class,'productShow'])->name('show');


Route::group(['prefix'=>'admin', 'as' => 'admin.', 'middleware' => ['auth']], function (){
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');

    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('contact_info', ContactInfoController::class);
    Route::resource('banner', BannerController::class);

    Route::group(['prefix' => 'contact_info'], function () {
        Route::get('/', [ContactInfoController::class,'index'])->name('backend.contact_info');
        Route::get('/edit/{id}', [ContactInfoController::class,'edit'])->name('backend.contact_info.edit');
        Route::post('/edit/{id}', [ContactInfoController::class,'update'])->name('backend.contact_info.update');
    });
    Route::group(['prefix' => 'logo'], function () {
        Route::get('/', [LogoController::class,'index'])->name('backend.logo');
        Route::get('/edit/{id}', [LogoController::class,'edit'])->name('backend.logo.edit');
        Route::post('/edit/{id}', [LogoController::class,'update'])->name('backend.logo.update');
    });
});


require __DIR__.'/auth.php';
