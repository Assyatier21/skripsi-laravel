@extends('layouts.admin.app')
@section('title', 'Pengajuan Tugas Belajar')

@section('css')
@endsection

@section('content')
<div class="p-5">
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