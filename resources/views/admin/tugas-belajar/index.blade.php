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
                    @forelse ($tb as $data)
                    <tr class="align-items-center">
                        <th scope="row">{{ $loop->iteration + $tb->firstItem() - 1 }}</th>
                        <td>{{ $data->user->nama }}</td>
                        <td>{{ Carbon\Carbon::parse($data->created_at)->format('l, d M Y') }}</td>
                        <td>
                            <a href="#" style="text-decoration: underline">
                                <i class="fa-solid fa-eye me-2"></i>Lihat</a>
                        </td>
                        <td>
                            @if($data->status_pengajuan == 0)
                            <h5><span class="badge bg-secondary w-50">Menunggu</span></h5>
                            @elseif($data->status_pengajuan == 1)
                            <h5><span class="badge bg-secondary w-50">Menunggu</span></h5>
                            @elseif($data->status_pengajuan == 2)
                            <h5><span class="badge bg-success w-50">Diterima</span></h5>
                            @elseif($data->status_pengajuan == -1)
                            <h5><span class="badge bg-danger w-50">Ditolak</span></h5>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Belum Ada Data Pengajuan Tugas Belajar</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{-- Pagination --}}
            <div class="mt-4">
                {{ $tb->appends(request()->input())->links() }}
            </div>
        </div>
    </div>
    {{-- TABEL TUGAS BELAJAR --}}
</div>
@endsection