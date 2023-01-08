<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notifikasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pengajuanku;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{

    public function guest_dashboard()
    {
        return view('guest-dashboard');
    }
    public function index()
    {
        return view('user.beranda');
    }
    public function pengajuanku()
    {
        // 0 : Menunggu, 1 : To Direktur, -1 : Ditolak, 2 : Diterima
        $pengajuanku = Pengajuanku::whereNip(auth()->user()->nip)->get();
        return view('user.pengajuanku', compact('pengajuanku'));
    }
    public function notifikasi()
    {
        $notifikasi = Notifikasi::whereNip(auth()->user()->nip)->get();
        foreach ($notifikasi as $n) {
            $n->is_active = '0';
            $n->save();
        }
        return view('user.notifikasi', compact('notifikasi'));
    }


    // PROFILE SECTION ---------------------------------------------------------------
    public function profil()
    {
        $profil = User::whereNip(auth()->user()->nip)->first();
        return view('user.profil', compact('profil'));
    }

    public function update_profil(Request $request)
    { }
}
