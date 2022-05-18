<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampelController extends Controller
{
    public function index()
    {
        return view('landing.duniaSeal.feature');
    }

    public function pengenalan()
    {
        return view('landing.duniaSeal.pengenalan');
    }

    public function berita()
    {
        return view('landing.duniaSeal.berita');
    }

    public function acara()
    {
        return view('landing.duniaSeal.acara');
    }

    public function info()
    {
        return view('landing.duniaSeal.info');
    }

    public function gameUpdate()
    {
        return view('landing.duniaSeal.gameUpdate');
    }

    public function carnivalCity()
    {
        return view('landing.duniaSeal.carnivalCity');
    }

    public function guildWars()
    {
        return view('landing.duniaSeal.guildWars');
    }

    public function service()
    {
        return view('landing.duniaSeal.service');
    }

    public function updateSeal()
    {
        return view('landing.duniaSeal.updateSeal');
    }
}
