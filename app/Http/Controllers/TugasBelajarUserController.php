<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasBelajarUserController extends Controller
{
    public function informasi()
    {
        return view('user.tugas-belajar.informasi');
    }
    public function pengajuan()
    {
        return view('user.tugas-belajar.pengajuan');
    }
    public function sunting()
    {
        return view('user.tugas-belajar.sunting');
    }
}
