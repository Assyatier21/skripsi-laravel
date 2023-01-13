@extends('layouts.user.app')
@section('title', 'Informasi Izin Belajar')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/user/izin_belajar.css') }}">
@endsection

@section('content')
<div class="p-5 main-content">
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
    <div class="syarat">
        <div class="card justify-content-center shadow-sm">
            <h5 class="card-header px-5">Syarat Pengajuan Umum</h5>
            <div class="card-body px-5">
                <p class="card-text ml-3">1.&nbsp;&nbsp;Telah Bekerja Minimal 4 Tahun Sejak Pengangkatan Sebagai Pegawai
                    Negeri Sipil.</p>
                <p class="card-text ml-3">2.&nbsp;&nbsp;Setiap Unsur Penilaian dalam SKP Minimal Baik dalam 3 Tahun
                    Terakhir.</p>
                <p class="card-text ml-3">3.&nbsp;&nbsp;Tidak Sedang Menjalani Hukuman Disiplin Tingkat Sedang atau
                    Berat.</p>
                <p class="card-text ml-3">4.&nbsp;&nbsp;Tidak Sedang Menjalani Pemberhentian Sementara Sebagai Pegawai
                    Negeri Sipil.</p>
                <p class="card-text ml-3">5.&nbsp;&nbsp;Bidang Pendidikan Yang Diikuti Harus Mendukung Pelaksanaan Tugas
                    Jabatan.</p>
                <p class="card-text ml-3">6.&nbsp;&nbsp;Biaya Pendidikan Ditanggung Oleh Pegawai yang Bersangkutan.</p>
                <p class="card-text ml-3">7.&nbsp;&nbsp;Program Pendidikan di dalam Negeri Telah Mendapat Persetujuan
                    dari Materi Yang Membidangi Pendidikan.</p>
                <p class="card-text ml-3">8.&nbsp;&nbsp;Pendidikan Diikuti di luar Jam Kerja dan Tidak Menggangu
                    Pekerjaan/Tugas Sehari-hari.</p>
                <p class="card-text ml-3">9.&nbsp;&nbsp;Pegawai Negeri Sipil Tidak Berhak Menuntut Penyesuaian Ijazah
                    Apabila Formasi Belum Memungkinkan.</p>
            </div>
        </div>
    </div>

    <div class="pendukung my-4">
        <div class="card justify-content-center shadow-sm">
            <h5 class="card-header px-5">Contoh Dokumen Pendukung</h5>
            <div class="card-body px-5">
                <div class="d-block justify-content-center">
                    <a href="{{ route('user.surat.abk') }}"><img src="{{ asset('assets/images/Surat Pernyataan.png') }}"
                            alt=""></a>
                    <a href="{{ route('user.surat_permohonan.ib') }}"><img
                            src="{{ asset('assets/images/Surat Permohonan.png') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('assets/images/SK Kelas Reguler.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="rekomendasi">
        <div class="card justify-content-center shadow-sm">
            <h5 class="card-header px-5">Rekomendasi Kampus</h5>
            <div class="card-body px-5">
                <div class="d-block justify-content-center">
                    <a href="#"><img src="{{ asset('assets/images/Surat Pernyataan.png') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('assets/images/Surat Pernyataan.png') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('assets/images/Surat Pernyataan.png') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('assets/images/Surat Pernyataan.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="ajukan my-4 d-flex justify-content-end">
        <a href="{{ route('user.izin-belajar.pengajuan') }}">
            <button type="button" class="btn btn-success ajukan">Ajukan</button>
        </a>
    </div>
</div>
@endsection