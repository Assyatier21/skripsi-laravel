<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pengajuanku;
use App\Models\TugasBelajar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TugasBelajarUserController extends Controller
{
    public function informasi()
    {
        return view('user.tugas-belajar.informasi');
    }

    // PENGAJUAN SECTION ---------------------------------------------------------------
    public function pengajuan()
    {
        return view('user.tugas-belajar.pengajuan');
    }
    public function store_pengajuan(Request $request)
    {

        $validation = Validator::make(
            $request->all(),
            [
                'institusi_pendidikan' => 'required',
                'akreditasi' => 'required',
                'alamat' => 'required',
                'no_telp' => 'required',
                'jurusan' => 'required',
                'program_studi' => 'required',
                'tahun_ajaran' => 'required',
                'jenjang_pendidikan' => 'required',
                'link_beasiswa' => 'required',

                'ijazah' => 'required|mimes:pdf|max:2048',
                'transkrip_nilai' => 'required|mimes:pdf|max:2048',

                'sk_pns' => 'required|mimes:pdf|max:2048',
                'sk_terakhir' => 'required|mimes:pdf|max:2048',
                'ppkp' => 'required|mimes:pdf|max:2048',
            ],
            [
                'institusi_pendidikan.required' => 'Institusi Pendidikan Harus Diisi',
                'akreditasi.required' => 'Akreditasi Harus Diisi',
                'alamat.required' => 'Alamat Harus Diisi',
                'no_telp.required' => 'Nomor Telepon Harus Diisi',
                'jurusan.required' => 'Jurusan Harus Diisi',
                'program_studi.required' => 'Program Studi Harus Diisi',
                'tahun_ajaran.required' => 'Tahun Ajaran Harus Diisi',
                'jenjang_pendidikan.required' => 'Jenjang Pendidikan Harus Diisi',
                'link_beasiswa.required' => 'Tautan Beasiswa Harus Diisi',

                'ijazah.required' => 'Ijazah Harus Diisi',
                'transkrip_nilai.required' => 'Transkrip Nilai Harus Diisi',

                'sk_pns.required' => 'Surat Keterangan PNS Harus Diisi',
                'sk_terakhir.required' => 'Surat Keterangan Terakhir Harus Diisi',
                'ppkp.required' => 'PPKP Harus Diisi',

                'ijazah.mimes' => 'Format Ijazah Harus Berupa PDF',
                'transkrip_nilai.mimes' => 'Format Transkrip Nilai Harus Berupa PDF',

                'sk_pns.mimes' => 'Format Surat Keterangan PNS Harus Berupa PDF',
                'sk_terakhir.mimes' => 'Format Surat Keterangan Terakhir Harus Berupa PDF',
                'ppkp.mimes' => 'Format PPKP Harus Berupa PDF',

                'ijazah.max' => 'Format Ijazah Maksimal Berukuran Maksimal 2 MB',
                'transkrip_nilai.max' => 'Format Transkrip Nilai Maksimal Berukuran Maksimal 2 MB',

                'sk_pns.max' => 'Format Surat Keterangan PNS Maksimal Berukuran Maksimal 2 MB',
                'sk_terakhir.max' => 'Format Surat Keterangan Terakhir Maksimal Berukuran Maksimal 2 MB',
                'ppkp.max' => 'Format PPKP Maksimal Berukuran Maksimal 2 MB',
            ]
        );

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        $tb = new TugasBelajar();
        $tb->nip = auth()->user()->nip;
        $tb->nama_institusi = $request->institusi_pendidikan;
        $tb->akreditasi_institusi = $request->akreditasi;
        $tb->alamat_institusi = $request->alamat;
        $tb->telp_institusi = $request->no_telp;
        $tb->jenjang_pendidikan = $request->jenjang_pendidikan;
        $tb->program_studi = $request->program_studi;
        $tb->jurusan = $request->jurusan;
        $tb->tahun_ajaran = $request->tahun_ajaran;
        $tb->link_beasiswa = $request->link_beasiswa;

        $tb->ijazah_terakhir = $request->file('ijazah')->store('tugas-belajar/ijazah', 'public');
        $tb->transkrip_nilai = $request->file('transkrip_nilai')->store('tugas-belajar/transkrip-nilai', 'public');

        $tb->sk_pns = $request->file('sk_pns')->store('tugas-belajar/sk-pns', 'public');
        $tb->sk_terakhir = $request->file('sk_terakhir')->store('tugas-belajar/sk-terakhir', 'public');
        $tb->ppkp = $request->file('ppkp')->store('tugas-belajar/ppkp', 'public');

        $tb->status_pengajuan = '0';
        $tb->created_at = Carbon::now();
        $tb->updated_at = Carbon::now();

        if ($tb->save()) {
            $pengajuan = new Pengajuanku();
            $pengajuan->nip = auth()->user()->nip;
            $pengajuan->id_pengajuan = $tb->id;
            $pengajuan->jenis_pengajuan = 'tb';
            $pengajuan->status_pengajuan = '0';
            $pengajuan->created_updated_at = Carbon::now();
            if ($pengajuan->save()) {
                return redirect()->route('user.tugas-belajar.informasi')->with('success', 'Selamat Pengajuan Tugas Belajar Anda Berhasil!');
            } else {
                return redirect()->back()->with('danger', 'Pengajuan Tugas Belajar Anda Gagal!');
            }
        } else {
            return redirect()->back()->with('danger', 'Pengajuan Tugas Belajar Anda Gagal!');
        }
    }

    public function sunting($id)
    {
        $tb = TugasBelajar::whereId($id)->first();
        if ($tb->nip != auth()->user()->nip) {
            return redirect()->route('user.tugas-belajar.informasi')->with('danger', 'Anda Tidak Memiliki Akses Ke Halaman Tersebut!')->withInput();
        }
        return view('user.tugas-belajar.sunting', compact('tb'));
    }
    public function update_sunting(Request $request, $id)
    {
        $validation = Validator::make(
            $request->all(),
            [
                'institusi_pendidikan' => 'required',
                'akreditasi' => 'required',
                'alamat' => 'required',
                'no_telp' => 'required',
                'jurusan' => 'required',
                'program_studi' => 'required',
                'tahun_ajaran' => 'required',
                'jenjang_pendidikan' => 'required',
                'link_beasiswa' => 'required',

                'ijazah' => 'mimes:pdf|max:2048',
                'transkrip_nilai' => 'mimes:pdf|max:2048',

                'sk_pns' => 'mimes:pdf|max:2048',
                'sk_terakhir' => 'mimes:pdf|max:2048',
                'ppkp' => 'mimes:pdf|max:2048',
            ],
            [
                'institusi_pendidikan.required' => 'Institusi Pendidikan Harus Diisi',
                'akreditasi.required' => 'Akreditasi Harus Diisi',
                'alamat.required' => 'Alamat Harus Diisi',
                'no_telp.required' => 'Nomor Telepon Harus Diisi',
                'jurusan.required' => 'Jurusan Harus Diisi',
                'program_studi.required' => 'Program Studi Harus Diisi',
                'tahun_ajaran.required' => 'Tahun Ajaran Harus Diisi',
                'jenjang_pendidikan.required' => 'Jenjang Pendidikan Harus Diisi',
                'link_beasiswa.required' => 'Link Beasiswa Harus Diisi',

                'ijazah.mimes' => 'Format Ijazah Harus Berupa PDF',
                'transkrip_nilai.mimes' => 'Format Transkrip Nilai Harus Berupa PDF',

                'sk_pns.mimes' => 'Format Surat Keterangan PNS Harus Berupa PDF',
                'sk_terakhir.mimes' => 'Format Surat Keterangan Terakhir Harus Berupa PDF',
                'ppkp.mimes' => 'Format PPKP Harus Berupa PDF',

                'ijazah.max' => 'Format Ijazah Maksimal Berukuran Maksimal 2 MB',
                'transkrip_nilai.max' => 'Format Transkrip Nilai Maksimal Berukuran Maksimal 2 MB',

                'sk_pns.max' => 'Format Surat Keterangan PNS Maksimal Berukuran Maksimal 2 MB',
                'sk_terakhir.max' => 'Format Surat Keterangan Terakhir Maksimal Berukuran Maksimal 2 MB',
                'ppkp.max' => 'Format PPKP Maksimal Berukuran Maksimal 2 MB',
            ]
        );

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }


        $tb = TugasBelajar::whereId($id)->first();
        $tb->nip = auth()->user()->nip;
        $tb->nama_institusi = $request->institusi_pendidikan;
        $tb->akreditasi_institusi = $request->akreditasi;
        $tb->alamat_institusi = $request->alamat;
        $tb->telp_institusi = $request->no_telp;
        $tb->jurusan = $request->jurusan;
        $tb->program_studi = $request->program_studi;
        $tb->tahun_ajaran = $request->tahun_ajaran;
        $tb->jenjang_pendidikan = $request->jenjang_pendidikan;

        if ($request->hasFile('ijazah')) {
            Storage::delete('public/' . $tb->ijazah_terakhir);
            $tb->ijazah_terakhir = $request->file('ijazah')->store('tugas-belajar/ijazah', 'public');
        }
        if ($request->hasFile('transkrip_nilai')) {
            Storage::delete('public/' . $tb->transkrip_nilai);
            $tb->transkrip_nilai = $request->file('transkrip_nilai')->store('tugas-belajar/transkrip_nilai', 'public');
        }

        if ($request->hasFile('sk_pns')) {
            Storage::delete('public/' . $tb->sk_pns);
            $tb->sk_pns = $request->file('sk_pns')->store('tugas-belajar/sk_pns', 'public');
        }
        if ($request->hasFile('sk_terakhir')) {
            Storage::delete('public/' . $tb->sk_terakhir);
            $tb->sk_terakhir = $request->file('sk_terakhir')->store('tugas-belajar/sk_terakhir', 'public');
        }
        if ($request->hasFile('ppkp')) {
            Storage::delete('public/' . $tb->ppkp);
            $tb->ppkp = $request->file('ppkp')->store('tugas-belajar/ppkp', 'public');
        }

        $tb->status_pengajuan = '0';
        $tb->updated_at = Carbon::now();

        if ($tb->update()) {
            $pengajuanku = Pengajuanku::whereIdPengajuan($tb->id)->whereJenisPengajuan('tb')->first();
            $pengajuanku->status_pengajuan = '0';
            $pengajuanku->created_updated_at = Carbon::now();
            $pengajuanku->update();
            return redirect()->route('user.tugas-belajar.informasi')->with('success', 'Pengajuan Tugas Belajar Anda Berhasil Diperbarui!');
        } else {
            return redirect()->back()->with('danger', 'Pengajuan Tugas Belajar Anda Gagal Diperbarui!');
        }
    }
}
