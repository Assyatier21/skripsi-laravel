@extends('layouts.user.app')
@section('title', 'Profil')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/user/profil.css') }}">
@endsection

@section('content')
<main class="p-5">
    {{-- FORM --}}
    <form action="#">
        <div class="row-content">

            {{-- LEFT SIDE --}}
            <div class="mx-5 col-lg-2 col-12">
                <div class="profil">
                    <div class="card border-0 w-100 h-100">
                        <img class=" card-img-top"
                            src="{{ asset('assets/images/3. Pas Foto (3x4) - Muhammad Sholeh (09021281823172).jpg') }}"
                            alt="Card image cap" />
                    </div>
                </div>
            </div>
            {{-- LEFT SIDE --}}

            {{-- RIGHT SIDE --}}
            <div class="mx-5 col-lg-10 col-12 w-x">
                {{-- DATA PRIBADI --}}
                <div class="card justify-content-center border-0 mb-5 w-100">
                    <h5 class="card-header px-5">Data Pribadi</h5>
                    <div class="card-body px-5">
                        <div class="mb-3 row">
                            <label for="" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="status" name="status"
                                    value="Pegawai Negeri Sipil">
                            </div>
                        </div>
                        <div class="mb-1 row d-flex align-items-center">
                            <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="jk_laki"
                                        value="Laki-Laki" checked>
                                    <label class="form-check-label" for="">Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="jk_perempuan"
                                        value="Perempuan">
                                    <label class="form-check-label" for="">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"
                                    value="Palembang" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                                    value="2000-05-11" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" id="agama" class="form-control" value="Islam" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-3 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="no_telp" name="no_telp"
                                    value="087786355690">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email"
                                    value="muhammadsholeh.dev@gmail.com">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-3 col-form-label">Usia</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="usia" name="usia" value="23">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-3 col-form-label">Pas Foto</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="pas_foto" name="pas_foto">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- DATA PRIBADI --}}

                {{-- DATA KEPROFESIAN --}}
                <div class="card justify-content-center border-0 mb-5 w-100">
                    <h5 class="card-header px-5">Data Keprofesian</h5>
                    <div class="card-body px-5">
                        <div class="mb-3 row">
                            <label for="" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama" name="nama" value="Muhammad Sholeh">
                            </div>
                        </div>
                        <div class="mb-1 row d-flex align-items-center">
                            <label for="" class="col-sm-3 col-form-label">Spesialisasi</label>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="spesialisasi"
                                        id="spesialisasi_nakes" value="Tenaga Kesehatan" checked>
                                    <label class="form-check-label" for="">Tenaga Kesehatan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="spesialisasi"
                                        id="spesialisasi_non_nakes" value="Non - Tenaga Kesehatan" checked>
                                    <label class="form-check-label" for="">Non - Tenaga Kesehatan</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-3 col-form-label">Nomor Induk Pegawai</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" id="nip" class="form-control" value="1928374774742" />
                            </div>
                        </div>
                        <div class="mb-1 row d-flex align-items-center">
                            <label for="" class="col-sm-3 col-form-label">Pendidikan</label>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenjang_pendidikan"
                                        id="jenjang_pendidikan_s1" value="S1" checked>
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
                        <div class="mb-3 row">
                            <label for="" class="col-sm-3 col-form-label">Jabatan Pekerjaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" id="jabatan" class="form-control"
                                    value="Kabag Sumber Daya Manusia" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-3 col-form-label">Pangkat/Golongan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pangkat_golongan" id="pangkat_golongan" class="form-control"
                                    value="IIA" />
                            </div>
                        </div>
                    </div>
                </div>
                {{-- DATA KEPROFESIAN --}}
                {{-- BUTTON SUBMIT --}}
                <div class="w-100 d-flex justify-content-end">
                    <button class="btn btn-success w-10 submit">Simpan Data</button>
                </div>
                {{-- BUTTON SUBMIT --}}
            </div>
            {{-- RIGHT SIDE --}}
        </div>
    </form>
    {{-- FORM --}}
</main>
@endsection