<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Home extends Controller
{
    public function index()
    {
        $title = 'Infly Networks';
        return view('V_Home', compact('title'));
    }
}
