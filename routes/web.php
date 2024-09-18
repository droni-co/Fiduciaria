<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BalanceController;
//Admin controllers
use App\Http\Controllers\Admin\TrustController as AdminTrustController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::middleware(['auth'])->group(function () {
  Route::get('/', [DashboardController::class, 'home'])->name('home');
  Route::get('/balances', [BalanceController::class, 'index'])->name('balances.index');

  
});

Route::middleware(['auth'])
  ->prefix('admin')
  ->name('admin.')
  ->group(function () {
  // Admin
  Route::apiResource('trusts', AdminTrustController::class);
});

