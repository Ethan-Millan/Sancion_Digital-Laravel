<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\SancionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/sanciones', SancionController::class);
Route::get('/api-usuarios', [ApiController::class, 'usuarios']);