<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BannerToController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocialLinkController;
use App\Http\Controllers\TermController;
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
Route::get('/privacy-policy', [Frontend::class ,'privacy'])->name('frontend.privacy');
Route::get('/terms', [Frontend::class ,'terms'])->name('frontend.terms');
Route::get('/products/{id}', [Frontend::class,'product'])->name('frontend.category.product');
Route::get('/show/{id}', [Frontend::class,'productShow'])->name('show');


//Yajra route
Route::get('/employee',[EmployeeController::class,'index']);


Route::group(['prefix'=>'admin', 'as' => 'admin.', 'middleware' => ['auth']], function (){
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');

    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::post('/product/getProducts/',[ProductController::class,'getProducts'])->name('product.getProducts');
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
    Route::group(['prefix' => 'payment_method'], function () {
        Route::get('/', [PaymentMethodController::class,'index'])->name('backend.payment_method');
        Route::get('/edit/{id}', [PaymentMethodController::class,'edit'])->name('backend.payment_method.edit');
        Route::post('/edit/{id}', [PaymentMethodController::class,'update'])->name('backend.payment_method.update');
    });
    Route::group(['prefix' => 'social'], function () {
        Route::get('/', [SocialLinkController::class,'index'])->name('backend.social_link');
        Route::get('/edit/{id}', [SocialLinkController::class,'edit'])->name('backend.social_link.edit');
        Route::post('/edit/{id}', [SocialLinkController::class,'update'])->name('backend.social_link.update');
    });
    Route::group(['prefix' => 'privacy_policy'], function () {
        Route::get('/', [PrivacyPolicyController::class,'index'])->name('backend.privacy_policy');
        Route::get('/edit/{id}', [PrivacyPolicyController::class,'edit'])->name('backend.privacy_policy.edit');
        Route::post('/edit/{id}', [PrivacyPolicyController::class,'update'])->name('backend.privacy_policy.update');
    });
    Route::group(['prefix' => 'terms'], function () {
        Route::get('/', [TermController::class,'index'])->name('backend.term');
        Route::get('/edit/{id}', [TermController::class,'edit'])->name('backend.term.edit');
        Route::post('/edit/{id}', [TermController::class,'update'])->name('backend.term.update');
    });
    Route::group(['prefix' => 'banner_to'], function () {
        Route::get('/', [BannerToController::class,'index'])->name('backend.banner_to');
        Route::get('/edit/{id}', [BannerToController::class,'edit'])->name('backend.banner_to.edit');
        Route::post('/edit/{id}', [BannerToController::class,'update'])->name('backend.banner_to.update');
    });
});


require __DIR__.'/auth.php';
