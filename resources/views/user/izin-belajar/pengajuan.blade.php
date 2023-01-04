@extends('layouts.user.app')
@section('title', 'Informasi Izin Belajar')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/user/izin_belajar.css') }}">
@endsection

@section('content')
<div class="p-5 main-content">
    <div class="syarat">
        <div class="card justify-content-center shadow-sm">
            <h5 class="card-header">Data Institusi Tujuan</h5>
            <div class="card-body px-5">
                {{-- FORM --}}
                <form action="" autocomplete="off">

                    {{-- DATA INSTITUSI PENDIDIKAN --}}
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama Institusi Pendidikan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="institusi_pendidikan"
                                name="institusi_pendidikan" placeholder="Nama Institusi Pendidikan">
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="" class="col-sm-2 col-form-label">Akreditasi</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="akreditas" id="akreditasi_a"
                                    value="A">
                                <label class="form-check-label" for="inlineRadio1">A</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="akreditas" id="akreditasi_b"
                                    value="B">
                                <label class="form-check-label" for="inlineRadio2">B</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea name="alamat" id="alamat" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_telp" name="no_telp"
                                placeholder="Nomor Telepon">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Program Studi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="program_studi" name="rogram_studi"
                                placeholder="Program Studi">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran"
                                placeholder="Tahun Ajaran">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran"
                                placeholder="Tahun Ajaran">
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="" class="col-sm-2 col-form-label">Jenjang Pendidikan</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenjang_pendidikan"
                                    id="jenjang_pendidikan_s1" value="S1">
                                <label class="form-check-label">Strata-1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenjang_pendidikan"
                                    id="jenjang_pendidikan_s2" value="S2">
                                <label class="form-check-label">Strata-2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenjang_pendidikan"
                                    id="jenjang_pendidikan_s3" value="S3">
                                <label class="form-check-label">Strata-3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenjang_pendidikan"
                                    id="jenjang_pendidikan_s3" value="PPDS">
                                <label class="form-check-label">PPDS</label>
                            </div>
                        </div>
                    </div>
                    {{-- DATA INSTITUSI PENDIDIKAN --}}
                </form>
                {{-- FORM --}}
            </div>
        </div>
    </div>
</div>
@endsection