<?php

namespace App\Http\Controllers;

use App\Models\TugasBelajar;
use Illuminate\Http\Request;

class TugasBelajarAdminController extends Controller
{
    public function index()
    {
        $tb = TugasBelajar::with('user')->orderByDesc('id')->paginate(10);
        return view('admin.tugas-belajar.index', compact('tb'));
    }
    public function verifikasi()
    {
        return view('admin.tugas-belajar.verifikasi');
    }
}
