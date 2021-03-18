<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\PostController;
use App\Http\Controllers\User\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
