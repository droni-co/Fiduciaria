<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', [DashboardController::class, 'home'])->name('home');
