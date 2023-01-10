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
    public function verifikasi($id)
    {
        $ib = IzinBelajar::whereId($id)->first();
        return view('admin.izin-belajar.verifikasi', compact('ib'));
    }
    // public function update_verifikasi($id) {
    //     $ib = IzinBelajar::whereId($id)->first();
    //     if ($ib->has('setuju')) {
    //         $ib->update(['status_pengajuan' => 1]);
    //         LogHelper::instance()->store_log('Menyetujui Pengajuan Renovasi', auth()->user()->id, auth()->user()->role, now());
    //         return redirect()->back()->with('success', 'Pengajuan Renovasi Disetujui!');
    //     }

    //     if ($request->has('tolak')) {
    //         $rp->update(['status_pengajuan' => 0]);
    //         LogHelper::instance()->store_log('Menolak Pengajuan Renovasi', auth()->user()->id, auth()->user()->role, now());
    //         return redirect()->back()->with('error', 'Pengajuan Renovasi Ditolak!');
    //     }

    //     // return view('admin.izin-belajar.verifikasi', compact('ib'));
    // }
}
