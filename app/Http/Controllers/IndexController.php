<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('user.pengajuanku');
    }
    public function notifikasi()
    {
        $notifikasi = Notifikasi::whereNip(auth()->user()->nip)->get();
        return view('user.notifikasi', compact('notifikasi'));
    }
    public function profil()
    {
        $profil = User::whereNip(auth()->user()->nip)->first();
        return view('user.profil', compact('profil'));
    }
}
