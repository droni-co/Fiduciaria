<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function home()
  {
    $enrollments = Enrollment::where('user_id', Auth::id())->get();
    return view('dashboard.home', compact('enrollments'));
  }
}
