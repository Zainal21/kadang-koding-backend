<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
      return view('Backend.v_dashboard',[
        'blog' => \App\blog::count(),
        'portfolio' => \App\portfolio::count(),
        'menu' => \App\menu::count()
      ]);
    }
}
