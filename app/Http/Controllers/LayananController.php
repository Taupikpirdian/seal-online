<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;

class LayananController extends Controller
{
    public function kontak()
    {
        $contact_us_datas = ContactUs::orderBy('created_at', 'desc')->get();
        return view('landing.layanan.kontak', compact('contact_us_datas'));
    }
}
