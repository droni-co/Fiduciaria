<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balance;
use App\Models\Trust;
use Illuminate\Support\Facades\Auth;

class BalanceController extends Controller
{
  public function index()
  {
    $trust_ids = Auth::user()->enrollments->pluck('trust_id');
    $trusts = Trust::whereIn('id', $trust_ids)->get();

    return view('balances.index', compact('trusts'));
  }
}
