<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Dompdf\Dompdf;
use App\Models\User;
use App\Models\Admin;
use App\Http\Controllers\Controller;

class DocumentGeneratorController extends Controller
{
    public function surat_abk($id)
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $admin = Admin::whereRole('2')->first();
        $time_now = Carbon::now();

        return view('docs.surat_abk', compact('user', 'time_now', 'admin'));
    }
    public function surat_rekomendasi_tubel($id)
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $admin = Admin::whereRole('2')->first();
        $time_now = Carbon::now();
        return view('docs.surat_rekomendasi_tubel', compact('user', 'time_now', 'admin'));
    }
    public function surat_permohonan_ib($id)
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $admin = Admin::whereRole('2')->first();
        return view('docs.surat_permohonan_ib', compact('user', 'admin'));
    }
    public function surat_pembebasan_tb($id)
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $admin = Admin::whereRole('2')->first();
        $time_now = Carbon::now();
        return view('docs.surat_pembebasan', compact('user', 'time_now', 'admin'));
    }
    public function ib_1($id)
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $admin = Admin::whereRole('2')->first();
        $time_now = Carbon::now();
        return view('docs.izin-belajar.1', compact('user', 'time_now', 'admin'));
    }
    public function ib_2($id)
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $admin = Admin::whereRole('2')->first();
        $time_now = Carbon::now();
        return view('docs.izin-belajar.2', compact('user', 'time_now', 'admin'));
    }
    public function ib_3($id)
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        $admin = Admin::whereRole('2')->first();
        $time_now = Carbon::now();
        return view('docs.izin-belajar.3', compact('user', 'time_now', 'admin'));
    }
}
