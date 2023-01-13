<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\IzinBelajar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pengajuanku;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class IzinBelajarUserController extends Controller
{
    public function informasi()
    {
        return view('user.izin-belajar.informasi');
    }

    // PENGAJUAN SECTION ---------------------------------------------------------------
    public function pengajuan()
    {
        return view('user.izin-belajar.pengajuan');
    }
    public function store_pengajuan(Request $request)
    {
        $validation = Validator::make(
            $request->all(),
            [
                'nik' => 'required',
                'institusi_pendidikan' => 'required',
                'akreditasi' => 'required',
                'alamat' => 'required',
                'no_telp' => 'required',
                'jurusan' => 'required',
                'program_studi' => 'required',
                'tahun_ajaran' => 'required',
                'jenjang_pendidikan' => 'required',

                'ijazah' => 'required|mimes:pdf|max:2048',
                'transkrip_nilai' => 'required|mimes:pdf|max:2048',
                'surat_pernyataan' => 'required|mimes:pdf|max:2048',
                'surat_permohonan' => 'required|mimes:pdf|max:2048',

                'sk_pns' => 'required|mimes:pdf|max:2048',
                'sk_terakhir' => 'required|mimes:pdf|max:2048',
                'ppkp' => 'required|mimes:pdf|max:2048',
                'uraian_tugas' => 'required|mimes:pdf|max:2048',

                'sk_kelas_reguler' => 'required|mimes:pdf|max:2048',
                'jadwal_kelas_reguler' => 'required|mimes:pdf|max:2048',
                'file_akreditasi_institusi' => 'required|mimes:pdf|max:2048',
            ],
            [
                'nik.required' => 'Nomor Induk Kependudukan Harus Diisi',
                'institusi_pendidikan.required' => 'Institusi Pendidikan Harus Diisi',
                'akreditasi.required' => 'Akreditasi Harus Diisi',
                'alamat.required' => 'Alamat Harus Diisi',
                'no_telp.required' => 'Nomor Telepon Harus Diisi',
                'jurusan.required' => 'Jurusan Harus Diisi',
                'program_studi.required' => 'Program Studi Harus Diisi',
                'tahun_ajaran.required' => 'Tahun Ajaran Harus Diisi',
                'jenjang_pendidikan.required' => 'Jenjang Pendidikan Harus Diisi',

                'ijazah.required' => 'Ijazah Harus Diisi',
                'transkrip_nilai.required' => 'Transkrip Nilai Harus Diisi',
                'surat_pernyataan.required' => 'Surat Pernyataan Harus Diisi',
                'surat_permohonan.required' => 'Surat Permohonan Harus Diisi',

                'sk_pns.required' => 'Surat Keterangan PNS Harus Diisi',
                'sk_terakhir.required' => 'Surat Keterangan Terakhir Harus Diisi',
                'ppkp.required' => 'PPKP Harus Diisi',
                'uraian_tugas.required' => 'Uraian Tugas Harus Diisi',

                'sk_kelas_reguler.required' => 'SK Kelas Reguler Harus Diisi',
                'jadwal_kelas_reguler.required' => 'Jadwal Kelas Reguler Harus Diisi',
                'file_akreditasi_institusi.required' => 'File Akreditasi Institusi Harus Diisi',

                'ijazah.mimes' => 'Format Ijazah Harus Berupa PDF',
                'transkrip_nilai.mimes' => 'Format Transkrip Nilai Harus Berupa PDF',
                'surat_pernyataan.mimes' => 'Format Surat Pernyataan Harus Berupa PDF',
                'surat_permohonan.mimes' => 'Format Surat Permohonan Harus Berupa PDF',

                'sk_pns.mimes' => 'Format Surat Keterangan PNS Harus Berupa PDF',
                'sk_terakhir.mimes' => 'Format Surat Keterangan Terakhir Harus Berupa PDF',
                'ppkp.mimes' => 'Format PPKP Harus Berupa PDF',
                'uraian_tugas.mimes' => 'Format Uraian Tugas Harus Berupa PDF',

                'sk_kelas_reguler.mimes' => 'Format SK Kelas Reguler Harus Berupa PDF',
                'jadwal_kelas_reguler.mimes' => 'Format Jadwal Kelas Reguler Harus Berupa PDF',
                'file_akreditasi_institusi.mimes' => 'Format File Akreditasi Institusi Harus Berupa PDF',

                'ijazah.max' => 'Format Ijazah Maksimal Berukuran Maksimal 2 MB',
                'transkrip_nilai.max' => 'Format Transkrip Nilai Maksimal Berukuran Maksimal 2 MB',
                'surat_pernyataan.max' => 'Format Surat Pernyataan Maksimal Berukuran Maksimal 2 MB',
                'surat_permohonan.max' => 'Format Surat Permohonan Maksimal Berukuran Maksimal 2 MB',

                'sk_pns.max' => 'Format Surat Keterangan PNS Maksimal Berukuran Maksimal 2 MB',
                'sk_terakhir.max' => 'Format Surat Keterangan Terakhir Maksimal Berukuran Maksimal 2 MB',
                'ppkp.max' => 'Format PPKP Maksimal Berukuran Maksimal 2 MB',
                'uraian_tugas.max' => 'Format Uraian Tugas Maksimal Berukuran Maksimal 2 MB',

                'sk_kelas_reguler.max' => 'Format SK Kelas Reguler Maksimal Berukuran Maksimal 2 MB',
                'jadwal_kelas_reguler.max' => 'Format Jadwal Kelas Reguler Maksimal Berukuran Maksimal 2 MB',
                'file_akreditasi_institusi.max' => 'Format File Akreditasi Institusi Maksimal Berukuran Maksimal 2 MB',
            ]
        );

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        $ib = new IzinBelajar();
        $ib->nip = auth()->user()->nip;
        $ib->nik = $request->nik;
        $ib->nama_institusi = $request->institusi_pendidikan;
        $ib->akreditasi_institusi = $request->akreditasi;
        $ib->alamat_institusi = $request->alamat;
        $ib->telp_institusi = $request->no_telp;
        $ib->jurusan = $request->jurusan;
        $ib->program_studi = $request->program_studi;
        $ib->tahun_ajaran = $request->tahun_ajaran;
        $ib->jenjang_pendidikan = $request->jenjang_pendidikan;

        $ib->ijazah_terakhir = $request->file('ijazah')->store('izin-belajar/ijazah', 'public');
        $ib->transkrip_nilai = $request->file('transkrip_nilai')->store('izin-belajar/transkrip-nilai', 'public');
        $ib->surat_pernyataan = $request->file('surat_pernyataan')->store('izin-belajar/surat-pernyataan', 'public');
        $ib->surat_permohonan = $request->file('surat_permohonan')->store('izin-belajar/surat-permohonan', 'public');

        $ib->sk_pns = $request->file('sk_pns')->store('izin-belajar/sk-pns', 'public');
        $ib->sk_terakhir = $request->file('sk_terakhir')->store('izin-belajar/sk-terakhir', 'public');
        $ib->ppkp = $request->file('ppkp')->store('izin-belajar/ppkp', 'public');
        $ib->uraian_tugas = $request->file('uraian_tugas')->store('izin-belajar/uraian-tugas', 'public');

        $ib->sk_kelas_reguler = $request->file('sk_kelas_reguler')->store('izin-belajar/sk-kelas-reguler', 'public');
        $ib->jadwal_kelas_reguler = $request->file('jadwal_kelas_reguler')->store('izin-belajar/jadwal-kelas-reguler', 'public');
        $ib->file_akreditasi_institusi = $request->file('file_akreditasi_institusi')->store('izin-belajar/file-akreditasi-institusi', 'public');

        $ib->status_pengajuan = '0';
        $ib->created_at = Carbon::now();
        $ib->updated_at = Carbon::now();

        if ($ib->save()) {
            $pengajuan = new Pengajuanku();
            $pengajuan->nip = auth()->user()->nip;
            $pengajuan->id_pengajuan = $ib->id;
            $pengajuan->jenis_pengajuan = 'ib';
            $pengajuan->status_pengajuan = '0';
            $pengajuan->created_updated_at = Carbon::now();
            if ($pengajuan->save()) {
                return redirect()->route('user.izin-belajar.informasi')->with('success', 'Selamat Pengajuan Izin Belajar Anda Berhasil!');
            } else {
                return redirect()->back()->with('danger', 'Pengajuan Izin Belajar Anda Gagal!');
            }
        } else {
            return redirect()->back()->with('danger', 'Pengajuan Izin Belajar Anda Gagal!');
        }
    }

    public function sunting($id)
    {
        $ib = IzinBelajar::whereId($id)->first();
        if ($ib->nip != auth()->user()->nip) {
            return redirect()->route('user.izin-belajar.informasi')->with('danger', 'Anda Tidak Memiliki Akses Ke Halaman Tersebut!')->withInput();
        }
        return view('user.izin-belajar.sunting', compact('ib'));
    }
    public function update_sunting(Request $request, $id)
    {
        $validation = Validator::make(
            $request->all(),
            [
                'nik' => 'required',
                'institusi_pendidikan' => 'required',
                'akreditasi' => 'required',
                'alamat' => 'required',
                'no_telp' => 'required',
                'jurusan' => 'required',
                'program_studi' => 'required',
                'tahun_ajaran' => 'required',
                'jenjang_pendidikan' => 'required',

                'ijazah' => 'mimes:pdf|max:2048',
                'transkrip_nilai' => 'mimes:pdf|max:2048',
                'surat_pernyataan' => 'mimes:pdf|max:2048',
                'surat_permohonan' => 'mimes:pdf|max:2048',

                'sk_pns' => 'mimes:pdf|max:2048',
                'sk_terakhir' => 'mimes:pdf|max:2048',
                'ppkp' => 'mimes:pdf|max:2048',
                'uraian_tugas' => 'mimes:pdf|max:2048',

                'sk_kelas_reguler' => 'mimes:pdf|max:2048',
                'jadwal_kelas_reguler' => 'mimes:pdf|max:2048',
                'file_akreditasi_institusi' => 'mimes:pdf|max:2048',
            ],
            [
                'nik.required' => 'Nomor Induk Kependudukan Harus Diisi',
                'institusi_pendidikan.required' => 'Institusi Pendidikan Harus Diisi',
                'akreditasi.required' => 'Akreditasi Harus Diisi',
                'alamat.required' => 'Alamat Harus Diisi',
                'no_telp.required' => 'Nomor Telepon Harus Diisi',
                'jurusan.required' => 'Jurusan Harus Diisi',
                'program_studi.required' => 'Program Studi Harus Diisi',
                'tahun_ajaran.required' => 'Tahun Ajaran Harus Diisi',
                'jenjang_pendidikan.required' => 'Jenjang Pendidikan Harus Diisi',

                'ijazah.mimes' => 'Format Ijazah Harus Berupa PDF',
                'transkrip_nilai.mimes' => 'Format Transkrip Nilai Harus Berupa PDF',
                'surat_pernyataan.mimes' => 'Format Surat Pernyataan Harus Berupa PDF',
                'surat_permohonan.mimes' => 'Format Surat Permohonan Harus Berupa PDF',

                'sk_pns.mimes' => 'Format Surat Keterangan PNS Harus Berupa PDF',
                'sk_terakhir.mimes' => 'Format Surat Keterangan Terakhir Harus Berupa PDF',
                'ppkp.mimes' => 'Format PPKP Harus Berupa PDF',
                'uraian_tugas.mimes' => 'Format Uraian Tugas Harus Berupa PDF',

                'sk_kelas_reguler.mimes' => 'Format SK Kelas Reguler Harus Berupa PDF',
                'jadwal_kelas_reguler.mimes' => 'Format Jadwal Kelas Reguler Harus Berupa PDF',
                'file_akreditasi_institusi.mimes' => 'Format File Akreditasi Institusi Harus Berupa PDF',

                'ijazah.max' => 'Format Ijazah Maksimal Berukuran Maksimal 2 MB',
                'transkrip_nilai.max' => 'Format Transkrip Nilai Maksimal Berukuran Maksimal 2 MB',
                'surat_pernyataan.max' => 'Format Surat Pernyataan Maksimal Berukuran Maksimal 2 MB',
                'surat_permohonan.max' => 'Format Surat Permohonan Maksimal Berukuran Maksimal 2 MB',

                'sk_pns.max' => 'Format Surat Keterangan PNS Maksimal Berukuran Maksimal 2 MB',
                'sk_terakhir.max' => 'Format Surat Keterangan Terakhir Maksimal Berukuran Maksimal 2 MB',
                'ppkp.max' => 'Format PPKP Maksimal Berukuran Maksimal 2 MB',
                'uraian_tugas.max' => 'Format Uraian Tugas Maksimal Berukuran Maksimal 2 MB',

                'sk_kelas_reguler.max' => 'Format SK Kelas Reguler Maksimal Berukuran Maksimal 2 MB',
                'jadwal_kelas_reguler.max' => 'Format Jadwal Kelas Reguler Maksimal Berukuran Maksimal 2 MB',
                'file_akreditasi_institusi.max' => 'Format File Akreditasi Institusi Maksimal Berukuran Maksimal 2 MB',
            ]
        );

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }


        $ib = IzinBelajar::whereId($id)->first();
        $ib->nip = auth()->user()->nip;
        $ib->nik = $request->nik;
        $ib->nama_institusi = $request->institusi_pendidikan;
        $ib->akreditasi_institusi = $request->akreditasi;
        $ib->alamat_institusi = $request->alamat;
        $ib->telp_institusi = $request->no_telp;
        $ib->jurusan = $request->jurusan;
        $ib->program_studi = $request->program_studi;
        $ib->tahun_ajaran = $request->tahun_ajaran;
        $ib->jenjang_pendidikan = $request->jenjang_pendidikan;

        if ($request->hasFile('ijazah')) {
            Storage::delete('public/' . $ib->ijazah_terakhir);
            $ib->ijazah_terakhir = $request->file('ijazah')->store('izin-belajar/ijazah', 'public');
        }
        if ($request->hasFile('transkrip_nilai')) {
            Storage::delete('public/' . $ib->transkrip_nilai);
            $ib->transkrip_nilai = $request->file('transkrip_nilai')->store('izin-belajar/transkrip_nilai', 'public');
        }
        if ($request->hasFile('surat_pernyataan')) {
            Storage::delete('public/' . $ib->surat_pernyataan);
            $ib->surat_pernyataan = $request->file('surat_pernyataan')->store('izin-belajar/surat_pernyataan', 'public');
        }
        if ($request->hasFile('surat_permohonan')) {
            Storage::delete('public/' . $ib->surat_permohonan);
            $ib->surat_permohonan = $request->file('surat_permohonan')->store('izin-belajar/surat_permohonan', 'public');
        }

        if ($request->hasFile('sk_pns')) {
            Storage::delete('public/' . $ib->sk_pns);
            $ib->sk_pns = $request->file('sk_pns')->store('izin-belajar/sk_pns', 'public');
        }
        if ($request->hasFile('sk_terakhir')) {
            Storage::delete('public/' . $ib->sk_terakhir);
            $ib->sk_terakhir = $request->file('sk_terakhir')->store('izin-belajar/sk_terakhir', 'public');
        }
        if ($request->hasFile('ppkp')) {
            Storage::delete('public/' . $ib->ppkp);
            $ib->ppkp = $request->file('ppkp')->store('izin-belajar/ppkp', 'public');
        }
        if ($request->hasFile('uraian_tugas')) {
            Storage::delete('public/' . $ib->uraian_tugas);
            $ib->uraian_tugas = $request->file('uraian_tugas')->store('izin-belajar/uraian_tugas', 'public');
        }

        if ($request->hasFile('sk_kelas_reguler')) {
            Storage::delete('public/' . $ib->sk_kelas_reguler);
            $ib->sk_kelas_reguler = $request->file('sk_kelas_reguler')->store('izin-belajar/sk_kelas_reguler', 'public');
        }
        if ($request->hasFile('jadwal_kelas_reguler')) {
            Storage::delete('public/' . $ib->jadwal_kelas_reguler);
            $ib->jadwal_kelas_reguler = $request->file('jadwal_kelas_reguler')->store('izin-belajar/jadwal_kelas_reguler', 'public');
        }
        if ($request->hasFile('file_akreditasi_institusi')) {
            Storage::delete('public/' . $ib->file_akreditasi_institusi);
            $ib->file_akreditasi_institusi = $request->file('file_akreditasi_institusi')->store('izin-belajar/file_akreditasi_institusi', 'public');
        }

        $ib->status_pengajuan = '0';
        $ib->updated_at = Carbon::now();

        if ($ib->update()) {
            $pengajuanku = Pengajuanku::whereIdPengajuan($ib->id)->whereJenisPengajuan('ib')->first();
            $pengajuanku->status_pengajuan = '0';
            $pengajuanku->created_updated_at = Carbon::now();
            $pengajuanku->update();
            return redirect()->route('user.izin-belajar.informasi')->with('success', 'Pengajuan Izin Belajar Anda Berhasil Diperbarui!');
        } else {
            return redirect()->back()->with('danger', 'Pengajuan Izin Belajar Anda Gagal Diperbarui!');
        }
    }
}
