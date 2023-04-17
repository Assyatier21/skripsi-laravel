@extends('layouts.admin.app')
@section('title', 'Manajemen Pengguna')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/beranda.css') }}">
@endsection

@section('content')
<div class="p-4">
    @if (\Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>{!! \Session::get('success') !!}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (\Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span>{!! \Session::get('error') !!}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <a href="{{ route('admin.manajemen_user.register') }}">
        <button class="btn btn-success"><i class="fa-solid fa-plus fa-md me-2"></i>Tambah Pengguna</button>
    </a>

    <div class="card w-100 border-0 shadow-sm my-4">
        <div class="card-header bg-white pt-4">
            <h5 class="fw-bold">Tabel Anggota Aktif</h5>
        </div>
        <div class="table-responsive py-3 px-5">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($user as $u)
                    <tr class="align-items-center">
                        <th scope="row">{{ $loop->iteration + $user->firstItem() - 1 }}</th>
                        <td>{{ $u->nip }}</td>
                        <td>{{ $u->nama }}</td>
                        <td>
                            <a href="{{ route('admin.manajemen_user.edit', $u->id) }}">
                                <i class="fa-solid fa-pen-to-square fa-lg text-success me-1"></i>
                            </a>
                            <a href="{{ route('admin.manajemen_user.destroy', $u->id) }}"
                                onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Pengguna Ini?')">
                                <i class="fa-solid fa-trash fa-lg text-danger ms-1"></i>
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Belum Ada Data Pengguna</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-4">
                {{ $user->links() }}
            </div>
        </div>
    </div>
</div>
@endsection