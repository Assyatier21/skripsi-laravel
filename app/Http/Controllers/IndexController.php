<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notifikasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return view('user.pengajuanku');
    }
    public function notifikasi()
    {
        $notifikasi = Notifikasi::whereNip(auth()->user()->nip)->get();
        foreach ($notifikasi as $n) {
            $n->is_active = '0';
            $n->save();
        }
        return view('user.notifikasi', compact('notifikasi'));
    }
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
                'pas_foto' => 'required|mimes:jpg,jpeg,png|max:2048',
                'nama' => 'required',
                'spesialisasi' => 'required',
                'jenjang_pendidikan' => 'required',
                'jabatan' => 'required',
                'pangkat_golongan' => 'required',
            ]
        );

        if ($validation->fails()) {
            return redirect()->back()->with('danger', $validation->errors()->all())->withInput();
        }

        $user = User::whereNip(auth()->user()->nip)->first();
        // Delete Existing Pas Foto
        if ($user->pas_foto) {
            Storage::disk('public')->delete('pas_foto/' . $user->pas_foto);
        }

        if ($user->update(
            [
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'agama' => $request->agama,
                'no_telp' => $request->no_telp,
                'email' => $request->email,
                'usia' => $request->usia,
                'pas_foto' => $request->file('pas_foto')->store('images/pas_foto', 'public'),
                'nama' => $request->nama,
                'spesialisasi' => $request->spesialisasi,
                'jenjang_pendidikan' => $request->jenjang_pendidikan,
                'jabatan' => $request->jabatan,
                'pangkat_golongan' => $request->pangkat_golongan,
            ]
        )) {
            return redirect()->back()->with('success', 'Data Berhasil Diperbarui!');
        }
    }
}
