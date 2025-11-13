<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'welcome'])->name('home');
Route::get('/welcome', [BlogController::class, 'welcome'])->name('welcome');
Route::get('/about', [BlogController::class, 'about'])->name('about');
Route::get('/post', [BlogController::class, 'post'])->name('post');
Route::get('/servizi', [BlogController::class, 'servizi'])->name('servizi');
Route::get('/post/{id}', [BlogController::class, 'show'])->name('post.show');

