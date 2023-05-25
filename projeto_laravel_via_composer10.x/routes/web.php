<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'RenderHome']);

Route::get('/login.html', [LoginController::class, 'RenderLogin']); 

Route::fallback('');