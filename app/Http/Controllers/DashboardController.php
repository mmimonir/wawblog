<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    final public function index()
    {
        $cms_content = [
            'module_name' => 'Dashboard',
            'module_route' => 'dashboard',
            'sub_module_name' => 'Overview',
            'button_type' => 'create',
            'button_route' => 'dashboard',
        ];
        return view('dashboard.index', compact('cms_content'));
    }
}
