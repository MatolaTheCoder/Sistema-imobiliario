<?php

use App\Http\Controllers\CasaController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return inertia('index/index');
// });

Route::get('/', [IndexController::class, 'index']);
Route::get('/show', [IndexController::class, 'show']);
Route::get('/casa',[ CasaController::class, 'creates']);
