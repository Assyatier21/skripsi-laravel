<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ManajemenUserController extends Controller
{
    public function index()
    {
        $user = User::paginate('10');
        return view('admin.manajemen-user.index', compact('user'));
    }

    public function delete($id)
    {
        $user = User::whereId($id)->delete();
        return redirect()->back()->with('success', 'User Has Been Deleted!');
    }

    public function register()
    {
        return view('admin.manajemen-user.input');
    }

    public function store(Request $request)
    {
        $validation = Validator::make(
            $request->all(),
            [
                'nip' => 'required',
                'nama' => 'required',
            ],
            [
                'nip.required' => 'Nomor Induk Pegawai Harus Diisi',
                'nama.required' => 'Nama Lengkap Harus Diisi',
            ]
        );

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        $user = new User();
        $user->nip = $request->nip;
        $user->nama = $request->nama;

        if ($user->save()) {
            return redirect()->route('admin.manajemen_user')->with('success', 'Data Pengguna Berhasil Dibuat!');
        } else {
            return redirect()->back()->with('danger', 'Data Pengguna Gagal Dibuat!');
        }


        return view('admin.manajemen-user.input');
    }
}
