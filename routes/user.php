<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('/post/{post}', [HomeController::class, 'show'])->name('user.post.show');
