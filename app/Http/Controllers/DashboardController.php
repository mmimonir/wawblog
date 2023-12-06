<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    final public function index()
    {
        return view('dashboard.layouts.master');
    }
}
