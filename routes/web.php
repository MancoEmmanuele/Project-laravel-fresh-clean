<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/',[PublicController::class,"home"])->name("home");
Route::get('/auth/login',[ArticleController::class,"login"])->name("auth.login");
Route::post('/auth/register',[ArticleController::class,"register"])->name("auth.register");