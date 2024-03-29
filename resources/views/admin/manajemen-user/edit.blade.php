@extends('layouts.admin.app')
@section('title', 'Manajemen Pengguna')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/beranda.css') }}">
@endsection

@section('content')
<div class="p-4">
    {{-- FORM --}}
    <form action="{{ route('admin.manajemen_user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- DATA DIRI --}}
        <div class="card justify-content-center shadow-sm mb-5">
            @if (\Session::has('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span>{!! \Session::get('danger') !!}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (\Session::has('errors'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <h5 class="card-header px-5">Form Pembaharuan Data Anggota</h5>
            <div class="card-body px-5">
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Nomor Induk Pegawai</label>
                    <div class="col-sm-9">
                        <input required type="text" class="form-control" id="nip" name="nip"
                            placeholder="Nomor Induk Pegawai" value="{{ $user->nip }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input required type="text" class="form-control" id="nama" name="nama"
                            placeholder="Nama Lengkap" value="{{ $user->nama }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="password" name="password"
                            placeholder="Password Baru">
                    </div>
                    <small class="text-danger">* Opsional</small>
                </div>
            </div>
        </div>
        {{-- DATA DIRI --}}

        {{-- BUTTON SUBMIT --}}
        <div class="w-100 d-flex justify-content-end">
            <button class="btn btn-success w-10 submit" type="submit">Perbarui</button>
        </div>
        {{-- BUTTON SUBMIT --}}
    </form>
    {{-- FORM --}}
</div>
@endsection