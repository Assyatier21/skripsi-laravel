<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Dompdf\Dompdf;
use App\Models\User;
use App\Http\Controllers\Controller;

class DocumentGeneratorController extends Controller
{
    public function surat_abk()
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $time_now = Carbon::now();

        return view('docs.surat_abk', compact('user', 'time_now'));
    }
    public function surat_rekomendasi_tubel()
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $time_now = Carbon::now();
        return view('docs.surat_rekomendasi_tubel', compact('user', 'time_now'));
    }
    public function surat_permohonan_ib()
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        return view('docs.surat_permohonan_ib', compact('user'));
    }
    public function surat_pembebasan_ib()
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $time_now = Carbon::now();
        return view('docs.surat_pembebasan', compact('user', 'time_now'));
    }
    public function ib_1()
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $time_now = Carbon::now();
        return view('docs.izin-belajar.1', compact('user', 'time_now'));
    }
    public function ib_2()
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $time_now = Carbon::now();
        return view('docs.izin-belajar.2', compact('user', 'time_now'));
    }
    public function ib_3()
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $time_now = Carbon::now();
        return view('docs.izin-belajar.3', compact('user', 'time_now'));
    }
}
