<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'welcome']);
Route::get('/welcome', [BlogController::class, 'welcome']);
Route::get('/about', [BlogController::class, 'about']);
Route::get('/post', [BlogController::class, 'post']);
Route::get('/servizi', [BlogController::class, 'servizi']);
