<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function pengajuanku()
    {
        return view('user.pengajuanku');
    }
    public function notifikasi()
    {
        return view('user.notifikasi');
    }
    public function profil()
    {
        return view('user.profil');
    }
}
