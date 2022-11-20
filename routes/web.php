<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CountrieController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;




Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/gallery',[GalleryController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);



// route::get('dbSync',[CountrieController::class,'dbSync']);
// route::get('dbSync',[StateController::class,'dbSync']);

route::get('admission', [AdmissionController::class, 'admission']);

// --------------------------------------------
// route::get('state', [AdmissionController::class, 'index']);
// --------------------------------------------

Route::get('admin', [AdminAuthController::class, 'getLogin']);


Route::group(['prefix' => 'admin'], function () {

    Route::get('logout', [AdminAuthController::class, 'logout'])->name('adminLogout');

    Route::group(['middleware' => ['adminauth']], function () {
        Route::get('login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
        Route::post('login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    });

    Route::group(['middleware' => ['adminAfterLogin']], function () {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    });
});
