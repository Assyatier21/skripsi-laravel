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
                @forelse ($pengajuanku as $p)
                <tr class="align-items-center">
                    <th scope="row">
                        {{ $loop->iteration }}
                    </th>
                    <td>
                        @if($p->jenis_pengajuan == 'tb')
                        Tugas Belajar
                        @else
                        Izin Belajar
                        @endif
                    </td>
                    <td>{{ Carbon\Carbon::parse($p->created_updated_at)->format('l, d M Y') }}</td>
                    <td>
                        @if($p->status_pengajuan == 0)
                        <h5><span class="badge bg-secondary w-50">Menunggu Admin</span></h5>
                        @elseif($p->status_pengajuan == 1)
                        <h5><span class="badge bg-secondary w-50">Menunggu Direktur</span></h5>
                        @elseif($p->status_pengajuan == 2)
                        <h5><span class="badge bg-success w-50">Diterima</span></h5>
                        @elseif($p->status_pengajuan == -1)
                        <h5><span class="badge bg-danger w-50">Ditolak</span></h5>
                        @endif
                    </td>
                    @if($p->status_pengajuan == 0 || $p->status_pengajuan == 1 || $p->status_pengajuan == 2)
                    <td class="text-muted">Edit</td>
                    @elseif($p->status_pengajuan == -1)
                    <td>
                        <a href="#" class="text-dark fw-bold">Edit</a>
                    </td>
                    @endif
                </tr>
                @empty
                <tr>
                    <td colspan="5">Anda Belum Memiliki Data Pengajuan</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>
@endsection