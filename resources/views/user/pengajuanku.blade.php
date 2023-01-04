@extends('layouts.user.app')
@section('title', 'Pengajuanku')

@section('css')
<style>
    thead {
        background-color: #198754 !important;
        color: white;
    }
</style>
@endsection

@section('content')
<main class="p-5">
    <div class="table-responsive">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Pengajuan</th>
                    <th scope="col">Waktu Pengajuan</th>
                    <th scope="col">Status </th>
                    <th scope="col">Opsi </th>
                </tr>
            </thead>
            <tbody>
                <tr class="align-items-center">
                    <th scope="row">1</th>
                    <td>Tugas Belajar</td>
                    <td>20 Maret 2023</td>
                    <td>
                        <h5><span class="badge bg-secondary w-50">Menunggu</span></h5>
                    </td>
                    <td class="text-muted">Edit</td>
                </tr>
                <tr class="align-items-center">
                    <th scope="row">1</th>
                    <td>Tugas Belajar</td>
                    <td>20 Maret 2023</td>
                    <td>
                        <h5><span class="badge bg-success w-50">Diterima</span></h5>
                    </td>
                    <td class="text-muted">Edit</td>
                </tr>
                <tr class="align-items-center">
                    <th scope="row">1</th>
                    <td>Tugas Belajar</td>
                    <td>20 Maret 2023</td>
                    <td>
                        <h5><span class="badge bg-danger w-50">Ditolak</span></h5>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection