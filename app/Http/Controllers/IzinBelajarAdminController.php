<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IzinBelajarAdminController extends Controller
{
    public function index()
    {
        return view('admin.izin-belajar.index');
    }
    public function verifikasi()
    {
        return view('admin.izin-belajar.verifikasi');
    }
}
