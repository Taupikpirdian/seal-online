<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persetujuan;

class MemberController extends Controller
{
    public function index()
    {
        $persetujuan = Persetujuan::orderBy('created_at', 'desc')->first();
        return view('landing.member.persetujuan', compact('persetujuan'));
    }
}
