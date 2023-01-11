<?php

namespace App\Http\Controllers;

use App\Models\IzinBelajar;
use App\Models\Notifikasi;
use App\Models\Pengajuanku;
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

    public function update_verifikasi(Request $request, $id)
    {
        $ib = IzinBelajar::whereId($id)->first();
        $pengajuanku = Pengajuanku::whereIdPengajuan($id)->whereJenisPengajuan('ib')->first();
        if ($request->has('terima')) {
            if (auth()->guard('admin')->user()->role == '1') {
                $ib->update(['status_pengajuan' => '1']);
                $pengajuanku->update(['status_pengajuan' => '1']);

                // Create Notification
                $pesan = "Pengajuan Izin Belajar Anda Berhasil Diteruskan ke Direktur!";
                $this->create_notification($ib->nip, $pesan);

                return redirect()->back()->with('success', 'Pengajuan Izin Belajar Berhasil Diteruskan ke Direktur!');
            } else if (auth()->guard('admin')->user()->role == '2') {
                $ib->update(['status_pengajuan' => '2']);
                $pengajuanku->update(['status_pengajuan' => '1']);

                // Create Notification
                $pesan = "Pengajuan Izin Belajar Anda Disetujui Direktur!";
                $this->create_notification($ib->nip, $pesan);

                return redirect()->back()->with('success', 'Pengajuan Izin Belajar Berhasil Disetujui!');
            }
        }

        if ($request->has('tolak')) {
            $ib->update([
                'status_pengajuan' => '-1',
                'alasan_penolakan' => $request->alasan,
            ]);
            $pengajuanku->update(['status_pengajuan' => '-1']);

            // Create Notification
            $this->create_notification($ib->nip, $request->alasan);
            return redirect()->back()->with('danger', 'Pengajuan Izin Belajar Berhasil Ditolak!');
        }
    }

    public function create_notification($nip, $pesan)
    {
        $notifikasi = new Notifikasi();
        $notifikasi->nip = $nip;
        $notifikasi->pesan = $pesan;
        $notifikasi->is_active = '1';
        $notifikasi->save();
    }
}
