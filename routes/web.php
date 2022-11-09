<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\AdmissionController;

route::get('dbSync',[StateController::class,'dbSync']);

route::get('admission',[AdmissionController::class,'admission']);

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
