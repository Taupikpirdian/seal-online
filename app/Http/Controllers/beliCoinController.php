<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class beliCoinController extends Controller
{
    public function index()
    {
        return view('landing.koin.index');
    }
}
