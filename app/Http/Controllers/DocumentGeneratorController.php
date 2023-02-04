<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Dompdf\Dompdf;
use App\Models\User;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Models\IzinBelajar;
use App\Models\TugasBelajar;

class DocumentGeneratorController extends Controller
{
    public function surat_abk($id)
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $admin = Admin::whereRole('2')->first();
        $tb = TugasBelajar::whereId($id)->first();
        $time_now = Carbon::now();

        return view('docs.surat_abk', compact('user', 'time_now', 'admin', 'tb'));
    }
    public function surat_rekomendasi_tubel($id)
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $admin = Admin::whereRole('2')->first();
        $tb = TugasBelajar::whereId($id)->first();
        $time_now = Carbon::now();
        return view('docs.surat_rekomendasi_tubel', compact('user', 'time_now', 'admin', 'tb'));
    }
    public function surat_permohonan_ib($id)
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $admin = Admin::whereRole('2')->first();
        $ib = IzinBelajar::whereId($id)->first();
        return view('docs.surat_permohonan_ib', compact('user', 'admin', 'ib'));
    }
    public function surat_pembebasan_tb($id)
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $admin = Admin::whereRole('2')->first();
        $tb = TugasBelajar::whereId($id)->first();
        $time_now = Carbon::now();
        return view('docs.surat_pembebasan', compact('user', 'time_now', 'admin', 'tb'));
    }
    public function ib_1($id)
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $admin = Admin::whereRole('2')->first();
        $ib = IzinBelajar::whereId($id)->first();
        $time_now = Carbon::now();
        return view('docs.izin-belajar.1', compact('user', 'time_now', 'admin', 'ib'));
    }
    public function ib_2($id)
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $admin = Admin::whereRole('2')->first();
        $ib = IzinBelajar::whereId($id)->first();
        $time_now = Carbon::now();
        return view('docs.izin-belajar.2', compact('user', 'time_now', 'admin', 'ib'));
    }
    public function ib_3($id)
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $admin = Admin::whereRole('2')->first();
        $ib = IzinBelajar::whereId($id)->first();
        $time_now = Carbon::now();
        return view('docs.izin-belajar.3', compact('user', 'time_now', 'admin', 'ib'));
    }
}
