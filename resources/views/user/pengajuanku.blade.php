@extends('layouts.user.app')
@section('title', 'Pengajuanku')

@section('css')
<style>
    thead {
        background-color: #198754 !important;
        color: white;
    }

    .hover-pointer {
        cursor: pointer !important;
    }
</style>
@endsection

@section('content')
<main class="p-5">
    @if (\Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show my-5" role="alert">
        <span>{!! \Session::get('success') !!}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (\Session::has('danger'))
    <div class="alert alert-danger alert-dismissible fade show my-5" role="alert">
        <span>{!! \Session::get('danger') !!}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
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
                        @switch($p->status_pengajuan)
                        @case(0)
                        <h5><span class="badge bg-secondary w-50">Menunggu Admin</span></h5>
                        @break
                        @case(1)
                        <h5><span class="badge bg-secondary w-50">Menunggu Direktur</span></h5>
                        @break
                        @case(2)
                        <h5><span class="badge bg-success w-50">Diterima</span></h5>
                        @break
                        @case(-1)
                        <h5><span class="badge bg-danger w-50">Ditolak</span></h5>
                        @break
                        @default
                        <h5><span class="badge bg-secondary w-50">Status tidak diketahui</span></h5>
                        @endswitch
                    </td>
                    @if($p->status_pengajuan == 2 && $p->jenis_pengajuan == "tb")
                    <td class="text-black fw-bold">
                        <a href="{{ route('download.tb', $p->jenis_pengajuan) }}" class="text-black fw-bold">Unduh
                            Berkas</a>
                    </td>
                    </a>
                    @elseif($p->status_pengajuan == 2 && $p->jenis_pengajuan == "ib")
                    <td class="text-black fw-bold">
                        <a href="{{ route('download.ib', $p->jenis_pengajuan) }}" class="text-black fw-bold">Unduh
                            Berkas</a>
                    </td>
                    @elseif($p->status_pengajuan != -1)
                    <td class="text-muted">Edit</td>
                    @elseif($p->jenis_pengajuan == "tb")
                    <td>
                        <a href="{{  route('user.tugas-belajar.edit', $p->id_pengajuan) }}"
                            class="text-dark fw-bold">Edit</a>
                    </td>
                    @elseif($p->jenis_pengajuan == "ib")
                    <td>
                        <a href="{{  route('user.izin-belajar.edit', $p->id_pengajuan) }}"
                            class="text-dark fw-bold">Edit</a>
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