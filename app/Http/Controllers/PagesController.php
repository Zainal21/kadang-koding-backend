<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index', [
            'setting' => \App\setting::find(1),
            'client' => \App\client::all(),
            'service' => \App\service::all(),
            'portfolio' => \App\portfolio::all(),
            'menu' => \App\menu::all()  
        ]);
    }
}
