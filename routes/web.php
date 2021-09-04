<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Backend\DashboardController;

//Login Route
Route::get('login',[\App\Http\Controllers\Backend\LoginController::class,'login'])->name('login');
Route::post('login',[\App\Http\Controllers\Backend\LoginController::class,'doLogin']);

Route::middleware('auth')->group(function (){

    Route::middleware('IsAdmin')->group(function (){

        Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');

        //Products Route
        Route::get('/products',[\App\Http\Controllers\Backend\ProductController::class,'index'])->name('admin.product');
        Route::get('/products/create',[\App\Http\Controllers\Backend\ProductController::class,'create'])->name('admin.product.create');
        Route::post('/products/create',[\App\Http\Controllers\Backend\ProductController::class,'store']);
        Route::get('/products/edit/{id}',[\App\Http\Controllers\Backend\ProductController::class,'edit'])->name('admin.product.edit');
        Route::post('/products/edit/{id}',[\App\Http\Controllers\Backend\ProductController::class,'update']);
        Route::get('/products/delete/{id}',[\App\Http\Controllers\Backend\ProductController::class,'delete'])->name('admin.product.delete');

        //Users Route
        Route::get('users',[\App\Http\Controllers\Backend\UserController::class,'index'])->name('admin.user');
        Route::get('users/create',[\App\Http\Controllers\Backend\UserController::class,'create'])->name('admin.user.create');
        Route::post('users/create',[\App\Http\Controllers\Backend\UserController::class,'store']);

        //Profile and Logout Route
        Route::get('logout',[\App\Http\Controllers\Backend\LoginController::class,'logout'])->name('logout');
        Route::get('profile',[\App\Http\Controllers\Backend\LoginController::class,'profile'])->name('profile');
    });

});
