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
                        <h6 id="total-akun" class="counter-count">{{ $information['user'] }}</h6>
                        <h6 id="detail-statistik">Total Akun Terdaftar</h6>
                    </div>
                </div>
                <div class="statistik-pengguna">
                    <img src="{{ asset('assets/images/icon14.png') }}" width="130" alt="" />
                    <div class="detail-statistika">
                        <h6 id="total-akun" class="counter-count">{{ $information['total_pengajuan'] }}</h6>
                        <h6 id="detail-statistik">Total Pengajuan</h6>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row my-2 justify-content-center">
                <div class="statistik-pengguna">
                    <img src="{{ asset('assets/images/icon15.png') }}" width="130" alt="" />
                    <div class="detail-statistika">
                        <h6 id="total-akun" class="counter-count">{{ $information['total_ib'] }}</h6>
                        <h6 id="detail-statistik">Total Pengajuan Izin Belajar</h6>
                    </div>
                </div>
                <div class="statistik-pengguna">
                    <img src="{{ asset('assets/images/icon16.png') }}" width="130" alt="" />
                    <div class="detail-statistika">
                        <h6 id="total-akun" class="counter-count">{{ $information['total_tb'] }}</h6>
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
                    @forelse ($ib as $data)
                    <tr class="align-items-center">
                        <th scope="row">{{ $loop->iteration + $ib->firstItem() - 1 }}</th>
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
                        <td colspan="5">Belum Ada Data Pengajuan Izin Belajar</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-4">
                {{ $ib->appends(['tb' => $tb->currentPage()])->links() }}
            </div>
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
            <div class="mt-4">
                {{ $tb->appends(['ib' => $ib->currentPage()])->links() }}
            </div>
        </div>
    </div>
    {{-- TABEL TUGAS BELAJAR --}}
</div>
@endsection