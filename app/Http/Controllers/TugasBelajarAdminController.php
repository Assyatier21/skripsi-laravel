<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Notifikasi;
use App\Models\Pengajuanku;
use Illuminate\Support\Str;
use App\Models\TugasBelajar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TugasBelajarAdminController extends Controller
{
    public function index()
    {
        $tb = TugasBelajar::with('user')->orderByDesc('id')->paginate(10);
        return view('admin.tugas-belajar.index', compact('tb'));
    }
    public function verifikasi($id)
    {
        $tb = TugasBelajar::whereId($id)->first();
        return view('admin.tugas-belajar.verifikasi', compact('tb'));
    }

    public function update_verifikasi(Request $request, $id)
    {
        $tb = TugasBelajar::whereId($id)->first();
        $pengajuanku = Pengajuanku::whereIdPengajuan($id)->whereJenisPengajuan('tb')->first();
        if ($request->has('terima')) {
            if (auth()->guard('admin')->user()->role == '1') {
                $tb->update(['status_pengajuan' => '1']);
                $pengajuanku->update(['status_pengajuan' => '1']);

                // Create Notification
                $pesan = "Pengajuan Tugas Belajar Anda Berhasil Diteruskan ke Direktur!";
                $this->create_notification($tb->nip, $pesan);

                return redirect()->back()->with('success', 'Pengajuan Tugas Belajar Berhasil Diteruskan ke Direktur!');
            } else if (auth()->guard('admin')->user()->role == '2') {
                $ttdName = '';
                if ($request->hasFile('ttd')) {
                    $ttdName = Str::random(20) . '.' . $request->ttd->extension();
                    $request->ttd->storeAs('public/ttd', $ttdName);
                    if (auth()->guard('admin')->user()->ttd) {
                        Storage::delete('public/ttd/' . auth()->guard('admin')->user()->ttd);
                    }
                } else {
                    $ttdName = auth()->guard('admin')->user()->ttd;
                }

                $admin = Admin::whereId(auth()->guard('admin')->user()->id)->get();
                $admin->update(['ttd' => $ttdName]);
                $tb->update(['status_pengajuan' => '2']);
                $pengajuanku->update(['status_pengajuan' => '1']);

                // Create Notification
                $pesan = "Pengajuan Tugas Belajar Anda Disetujui Direktur!";
                $this->create_notification($tb->nip, $pesan);

                return redirect()->back()->with('success', 'Pengajuan Tugas Belajar Berhasil Disetujui!');
            }
        }

        if ($request->has('tolak')) {
            $tb->update([
                'status_pengajuan' => '-1',
                'alasan_penolakan' => $request->alasan,
            ]);
            $pengajuanku->update(['status_pengajuan' => '-1']);

            // Create Notification
            $this->create_notification($tb->nip, $request->alasan);
            return redirect()->back()->with('danger', 'Pengajuan Tugas Belajar Berhasil Ditolak!');
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
