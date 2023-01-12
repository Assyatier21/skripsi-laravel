@extends('layouts.user.app')
@section('title', 'Informasi Tugas Belajar')

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
    <div class="syarat-umum">
        <div class="card justify-content-center shadow-sm">
            <div class="card justify-content-center">
                <h5 class="card-header px-5">Syarat dan Ketentuan Pengajuan Umum</h5>
                <div class="card-body px-5">
                    <p class="card-text text-justify ml-3" style="width: 95%">
                        1.&nbsp;&nbsp;Telah Memiliki Masa Kerja Pengabdian Pada Pemerintah
                        Provinsi Sumatera Selatan Minimal 4 Tahun Sebagai Pegawai Negeri
                        Sipil.
                    </p>
                    <p class="card-text text-justify ml-3" style="width: 95%">
                        2.&nbsp;&nbsp;Diusahakan Oleh Kepada Perangkat Daerah dan
                        Kepatuhan Terhadap SKP dalam 2 Tahun Terakhir.
                    </p>
                    <p class="card-text text-justify ml-3" style="width: 95%">
                        3.&nbsp;&nbsp;Memenuhi Syarat Yang Ditentukan Untuk Memasuki
                        Perguruan Tinggi.
                    </p>
                    <p class="card-text text-justify ml-3" style="width: 95%">
                        4.&nbsp;&nbsp;Tidak Sedang Menjalani Hukuman Disiplin Tingkat
                        Sedang atau Berat.
                    </p>
                    <p class="card-text text-justify ml-3" style="width: 95%">
                        5.&nbsp;&nbsp;Bagi Pegawai Negeri Sipil Yang Menduduki Jabatan
                        Struktural Dibebaskan dari Tugas dan Jabatan.
                    </p>
                    <p class="card-text text-justify ml-3" style="width: 95%">
                        6.&nbsp;&nbsp;Bagi Pegawai Negeri Sipil Yang Menduduki Jabatan
                        Fungsional Dibebaskan Sementara dari Tugas dan Jabatan.
                    </p>
                    <p class="card-text text-justify ml-3" style="width: 95%">
                        7.&nbsp;&nbsp;Perguruan Tinggi Tempat Tugas Belajar Adalah
                        Perguruan Tinggi Negeri Dalam Maupun Luar Negeri.
                    </p>
                    <p class="card-text text-justify ml-3" style="width: 95%">
                        8.&nbsp;Biaya Pendidikan Ditanggung oleh Pemerintah, Pemerintah
                        Negara Lain, Badan Internasional atau Badan Swasta Baik dalam
                        Maupun Luar Negeri
                    </p>
                    <p class="card-text text-justify ml-3" style="width: 95%">
                        9.&nbsp;Dalam Memberikan Tugas Belajar, Pimpinan Instansi Harus
                        Memberikan Kesempatan Bagi Semua Pegawai Negeri Sipil Sesuai
                        Dengan Bidang Tugasnya.
                    </p>
                    <p class="card-text text-justify ml-3" style="width: 95%">
                        10.&nbsp;Pegawai Negeri Sipil Tidak Berhak Menuntut Penyesuaian
                        Ijazah Apabila Formasi Belum Memungkinkan.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="syarat-usia my-4">
        <div class="card justify-content-center">
            <h5 class="card-header px-5">Syarat Usia dan Golongan Pengajuan</h5>
            <div class="card-body px-5">
                <p class="card-text ml-3">
                    1.&nbsp;Maksimal Usia 30 Tahun Untuk Program Akademi.
                </p>
                <p class="card-text ml-3">
                    2.&nbsp;Maksimal Usia 35 Tahun Untuk Program Strata-1.
                </p>
                <p class="card-text ml-3">
                    3.&nbsp;Maksimal Usia 40 Tahun Untuk Program Strata-2.
                </p>
                <p class="card-text ml-3">
                    4.&nbsp;Maksimal Usia 45 Tahun Untuk Program Strata-3, Kecuali
                    Golongan IV Maksimal 50 Tahun.
                </p>
                <p class="card-text ml-3">
                    5.&nbsp;Pangkat / Golongan Minimal II-A untuk Program Akademi.
                </p>
                <p class="card-text ml-3">
                    6.&nbsp;Pangkat / Golongan Minimal II-C untuk Program
                    Diploma-IV/Strata-1.
                </p>
                <p class="card-text ml-3">
                    7.&nbsp;Pangkat / Golongan Minimal III-A untuk Program Strata-2.
                </p>
                <p class="card-text ml-3">
                    8.&nbsp;Pangkat / Golongan Minimal III-B untuk Program Strata-3.
                </p>
            </div>
        </div>
    </div>

    <div class="rekomendasi">
        <div class="card justify-content-center shadow-sm">
            <h5 class="card-header px-5">Rekomendasi Kami</h5>
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
        <a href="{{ route('user.tugas-belajar.pengajuan') }}">
            <button type="button" class="btn btn-success ajukan fw-bold">Ajukan</button>
        </a>
    </div>
</div>
@endsection