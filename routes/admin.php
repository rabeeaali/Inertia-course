<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;


Route::middleware('admin')->name('admin.')->prefix('admin')->group(function () {
    
    Route::get('/', [HomeController::class,'index'])->name('home');

    Route::resource('posts', PostController::class);

});

