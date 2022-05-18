<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailFeatureController extends Controller
{
    public function acara()
    {
        return view('landing.detail.acara');
    }

    public function berita()
    {
        return view('landing.detail.berita');
    }
    
    public function gameUpdate()
    {
        return view('landing.detail.game');
    }

    public function rangking()
    {
        return view('landing.detail.rangking');
    }

    public function aturanMain()
    {
        return view('landing.detail.aturanMain');
    }
    
    public function guide()
    {
        return view('landing.detail.guide');
    }
}
