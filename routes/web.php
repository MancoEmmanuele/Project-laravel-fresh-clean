<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/',[PublicController::class,"home"])->name("home");
Route::get('/anime',[PublicController::class,"anime"])->name("anime");