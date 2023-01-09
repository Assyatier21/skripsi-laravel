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
        $pengajuanku = Pengajuanku::whereNip(auth()->user()->nip)->orderByDesc('id')->get();
        return view('user.pengajuanku', compact('pengajuanku'));
    }

    // NOTIFIKASI SECTION ---------------------------------------------------------------
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
    {
        $validation = Validator::make(
            $request->all(),
            [
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'agama' => 'required',
                'no_telp' => 'required',
                'email' => 'required',
                'usia' => 'required',
                'pas_foto' => 'mimes:jpg,jpeg,png|max:2048',
                'nama' => 'required',
                'spesialisasi' => 'required',
                'jenjang_pendidikan' => 'required',
                'jabatan' => 'required',
                'pangkat_golongan' => 'required',
            ],
            [
                'tempat_lahir.required' => 'Tempat Lahir Harus Diisi',
                'tanggal_lahir.required' => 'Tanggal Lahir Harus Diisi',
                'agama.required' => 'Agama Harus Diisi',
                'no_telp.required' => 'Nomor Telepon Harus Diisi',
                'email.required' => 'Email Harus Diisi',
                'usia.required' => 'Usia Harus Diisi',
                'pas_foto.mimes' => 'Format Pas Foto Harus: PNG/JPG/JPEG',
                'pas_foto.max' => 'Ukuran Maksimal Pas Foto Adalah 2 MB',
                'spesialisasi.required' => 'Spesialiasi Harus Diisi',
                'jenjang_pendidikan.required' => 'Jenjang Pendidikan Harus Diisi',
                'jabatan.required' => 'Jabatan Harus Diisi',
                'pangkat_golongan.required' => 'Pangkat/Golongan Harus Diisi',
            ]
        );

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        $user = User::whereNip(auth()->user()->nip)->first();
        $pasFotoName = '';
        if ($request->hasFile('pas_foto')) {
            $pasFotoName = Str::random(20) . '.' . $request->pas_foto->extension();
            $request->pas_foto->storeAs('public/pas_foto', $pasFotoName);
            if ($user->pas_foto) {
                Storage::delete('public/pas_foto/' . $user->pas_foto);
            }
        } else {
            $pasFotoName = $user->pas_foto;
        }


        if ($user->update(
            [
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'agama' => $request->agama,
                'no_telp' => $request->no_telp,
                'email' => $request->email,
                'usia' => $request->usia,
                'pas_foto' => $pasFotoName,
                'nama' => $request->nama,
                'spesialisasi' => $request->spesialisasi,
                'pendidikan_terakhir' => $request->jenjang_pendidikan,
                'jabatan' => $request->jabatan,
                'pangkat_golongan' => $request->pangkat_golongan,
            ]
        )) {
            return redirect()->back()->with('success', 'Data Berhasil Diperbarui!');
        }
    }
}
