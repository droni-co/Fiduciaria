<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BalanceController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::middleware(['auth'])->group(function () {
  Route::get('/', [DashboardController::class, 'home'])->name('home');
  Route::get('/balances', [BalanceController::class, 'index'])->name('balances.index');
});
