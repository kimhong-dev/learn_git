<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class countdownController extends Controller
{
    public function index()
    {
        return view('countdown');
    }
}
