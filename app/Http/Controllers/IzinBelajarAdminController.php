<?php

namespace App\Http\Controllers;

use App\Models\IzinBelajar;
use Illuminate\Http\Request;

class IzinBelajarAdminController extends Controller
{
    public function index()
    {
        $ib = IzinBelajar::with('user')->orderByDesc('id')->paginate(10);
        return view('admin.izin-belajar.index', compact('ib'));
    }
    public function verifikasi()
    {
        return view('admin.izin-belajar.verifikasi');
    }
}
