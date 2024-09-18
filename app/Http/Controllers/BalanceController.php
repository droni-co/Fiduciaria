<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balance;
use Illuminate\Support\Facades\Auth;

class BalanceController extends Controller
{
  public function index()
  {
    dd(Auth::user()->enrollments);
    $balances = Balance::all();
    return view('balances.index', compact('balances'));
  }
}
