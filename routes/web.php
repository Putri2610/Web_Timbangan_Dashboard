<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PksController;

Route::get('/', [DashboardController::class, 'index']);

Route::resource('pks', PksController::class);
