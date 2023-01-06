@extends('layouts.admin.app')
@section('title', 'Dashboard Admin')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/beranda.css') }}">
@endsection

@section('content')
<div class="p-4">
    {{-- CARD STATISTIK --}}
    <div class="card w-100 border-0 shadow-sm my-4">
        <div class="card-header bg-white pt-4">
            <h5 class="fw-bold">Detail Statistik Pengguna</h5>
        </div>
        <div class="card-body">
            <div class="d-flex flex-row my-2 justify-content-center">
                <div class="statistik-pengguna">
                    <img src="{{ asset('assets/images/icon13.png') }}" width="130" alt="" />
                    <div class="detail-statistika">
                        <h6 id="total-akun" class="counter-count">809</h6>
                        <h6 id="detail-statistik">Total Akun Terdaftar</h6>
                    </div>
                </div>
                <div class="statistik-pengguna">
                    <img src="{{ asset('assets/images/icon14.png') }}" width="130" alt="" />
                    <div class="detail-statistika">
                        <h6 id="total-akun" class="counter-count">809</h6>
                        <h6 id="detail-statistik">Total Pengajuan</h6>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row my-2 justify-content-center">
                <div class="statistik-pengguna">
                    <img src="{{ asset('assets/images/icon15.png') }}" width="130" alt="" />
                    <div class="detail-statistika">
                        <h6 id="total-akun" class="counter-count">809</h6>
                        <h6 id="detail-statistik">Total Pengajuan Izin Belajar</h6>
                    </div>
                </div>
                <div class="statistik-pengguna">
                    <img src="{{ asset('assets/images/icon16.png') }}" width="130" alt="" />
                    <div class="detail-statistika">
                        <h6 id="total-akun" class="counter-count">809</h6>
                        <h6 id="detail-statistik">Total Pengajuan Tugas Belajar</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- CARD STATISTIK --}}

    {{-- TABEL IZIN BELAJAR --}}
    <div class="card w-100 border-0 shadow-sm my-4">
        <div class="card-header bg-white pt-4">
            <h5 class="fw-bold">Pengajuan Izin Belajar Terbaru</h5>
        </div>
        <div class="table-responsive py-3 px-5">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Tanggal Pengajuan</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-items-center">
                        <th scope="row">1</th>
                        <td>Muhammad Sholeh</td>
                        <td>20 Maret 2023</td>
                        <td>
                            <a href="#" style="text-decoration: underline">
                                <i class="fa-solid fa-eye me-2"></i>Lihat</a>
                        </td>
                        <td>
                            <h5><span class="badge bg-success w-50">Diterima</span></h5>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- TABEL IZIN BELAJAR --}}

    {{-- TABEL TUGAS BELAJAR --}}
    <div class="card w-100 border-0 shadow-sm my-4">
        <div class="card-header bg-white pt-4">
            <h5 class="fw-bold">Pengajuan Tugas Belajar Terbaru</h5>
        </div>
        <div class="table-responsive py-3 px-5">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Tanggal Pengajuan</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-items-center">
                        <th scope="row">1</th>
                        <td>Muhammad Sholeh</td>
                        <td>20 Maret 2023</td>
                        <td>
                            <a href="#" style="text-decoration: underline">
                                <i class="fa-solid fa-eye me-2"></i>Lihat</a>
                        </td>
                        <td>
                            <h5><span class="badge bg-success w-50">Diterima</span></h5>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- TABEL TUGAS BELAJAR --}}
</div>
@endsection