<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasBelajarAdminController extends Controller
{
    public function index()
    {
        return view('admin.tugas-belajar.index');
    }
    public function verifikasi()
    {
        return view('admin.tugas-belajar.verifikasi');
    }
}
