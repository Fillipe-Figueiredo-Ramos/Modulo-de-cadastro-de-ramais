<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'RenderLogin']);
Route::get('/login', [LoginController::class, 'RenderLogin']); 
Route::get('/home', [HomeController::class, 'RenderHome']);
