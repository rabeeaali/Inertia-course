<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('admin', [HomeController::class,'index']);