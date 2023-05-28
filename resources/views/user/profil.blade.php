@extends('layouts.user.app')
@section('title', 'Profil')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/user/profil.css') }}">
@endsection

@section('content')
<main class="p-5">
    {{-- FORM --}}
    <form action="{{ route('user.update.profil') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row-content">
            {{-- LEFT SIDE --}}
            <div class="mx-5 col-lg-2 col-12">
                <div class="profil">
                    <div class="card border-0 w-100 h-100">
                        <img class=" card-img-top" src="{{ asset('storage/pas_foto/' . $profil->pas_foto) }}"
                            alt="Card image cap" />
                    </div>
                </div>
            </div>
            {{-- LEFT SIDE --}}

            {{-- RIGHT SIDE --}}
            <div class="mx-5 col-lg-10 col-12 w-x">
                @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span>{!! \Session::get('success') !!}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if (\Session::has('errors'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                {{-- DATA PRIBADI --}}
                <div class="card justify-content-center border-0 mb-5 w-100">
                    <h5 class="card-header px-5">Data Pribadi</h5>
                    <div class="card-body px-5">
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="status" name="status" readonly
                                    value="{{ $profil->status_profesi }}">
                            </div>
                        </div>
                        <div class="mb-1 row d-flex align-items-center">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="jk_laki"
                                        value="Laki-Laki" {{ $profil->jenis_kelamin == 'Laki-Laki' ? 'checked' :
                                    '' }} disabled>
                                    <label class="form-check-label text-dark">Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="jk_perempuan"
                                        value="Perempuan" {{ $profil->jenis_kelamin == 'Perempuan' ? 'checked' :
                                    '' }} disabled>
                                    <label class="form-check-label">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"
                                    value="{{ $profil->tempat_lahir }}" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                                    value="{{ $profil->tanggal_lahir }}" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" id="agama" class="form-control"
                                    value="{{ $profil->agama }}" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="no_telp" name="no_telp"
                                    value="{{ $profil->no_hp }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $profil->email }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Usia</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="usia" name="usia"
                                    value="{{ $profil->umur }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Pas Foto</label>
                            <div class="col-sm-9">
                                <input type="file" accept="application/pdf" class="form-control" id="pas_foto"
                                    name="pas_foto" accept="image/*">
                                <small class="text-danger mt-2">* Pas Foto Berukuran 300 x 400 Pixel dan Maksimal
                                    Berukuran
                                    2
                                    MB</small>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Tanda Tangan</label>
                            <div class="col-sm-9">
                                <input type="file" accept="application/pdf" class="form-control" id="ttd" name="ttd"
                                    accept="image/*">
                                <small class="text-danger mt-2">* File Tanda Tangan Maksimal
                                    Berukuran
                                    2
                                    MB</small>
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
                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $profil->nama }}">
                            </div>
                        </div>
                        <div class="mb-1 row d-flex align-items-center">
                            <label class="col-sm-3 col-form-label">Spesialisasi</label>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="spesialisasi"
                                        id="spesialisasi_nakes" value="Tenaga Kesehatan" {{ $profil->spesialisasi ==
                                    'Tenaga Kesehatan' ? 'checked' :'' }}>
                                    <label class="form-check-label">Tenaga Kesehatan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="spesialisasi"
                                        id="spesialisasi_non_nakes" value="Non - Tenaga Kesehatan" {{
                                        $profil->spesialisasi ==
                                    'Non - Tenaga Kesehatan' ? 'checked' :'' }}>
                                    <label class="form-check-label">Non - Tenaga Kesehatan</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nomor Induk Pegawai</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" id="nip" class="form-control" readonly
                                    value="{{ $profil->nip }}" />
                            </div>
                        </div>
                        <div class="mb-1 row d-flex align-items-center">
                            <label class="col-sm-3 col-form-label">Pendidikan</label>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenjang_pendidikan"
                                        id="jenjang_pendidikan_s1" value="Strata 1" {{ $profil->pendidikan_terakhir ==
                                    'Strata 1' ? 'checked' :'' }}>
                                    <label class="form-check-label">Strata-1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenjang_pendidikan"
                                        id="jenjang_pendidikan_s2" value="Strata 2" {{ $profil->pendidikan_terakhir ==
                                    'Strata 2' ? 'checked' :'' }}>
                                    <label class="form-check-label">Strata-2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenjang_pendidikan"
                                        id="jenjang_pendidikan_s3" value="Strata 3" {{ $profil->pendidikan_terakhir ==
                                    'Strata 3' ? 'checked' :'' }}>
                                    <label class="form-check-label">Strata-3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenjang_pendidikan"
                                        id="jenjang_pendidikan_s3" value="PPDS" {{ $profil->pendidikan_terakhir ==
                                    'PPDS' ? 'checked' :'' }}>
                                    <label class="form-check-label">PPDS</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Jabatan Pekerjaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" id="jabatan" class="form-control"
                                    value="{{ $profil->jabatan }}" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Pangkat/Golongan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pangkat_golongan" id="pangkat_golongan" class="form-control"
                                    value="{{ $profil->pangkat_golongan }}" />
                            </div>
                        </div>
                    </div>
                </div>
                {{-- DATA KEPROFESIAN --}}

                {{-- BUTTON SUBMIT --}}
                <div class="w-100 d-flex justify-content-end">
                    <button class="btn btn-success w-10 submit" type="submit">Simpan Data</button>
                </div>
                {{-- BUTTON SUBMIT --}}
            </div>
            {{-- RIGHT SIDE --}}
        </div>
    </form>
    {{-- FORM --}}
</main>
@endsection