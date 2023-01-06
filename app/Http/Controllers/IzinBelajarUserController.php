<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IzinBelajarUserController extends Controller
{
    public function informasi()
    {
        return view('user.izin-belajar.informasi');
    }
    public function pengajuan()
    {
        return view('user.izin-belajar.pengajuan');
    }
    public function sunting()
    {
        return view('user.izin-belajar.sunting');
    }
}
