@extends('layouts.user.app')
@section('title', 'Edit Pengajuan Izin Belajar')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/user/izin_belajar.css') }}">
@endsection

@section('content')
<div class="px-5 pt-4 pb-5 main-content">
    {{-- BREADCUMBS --}}
    <div aria-label="breadcrumb p-5">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="text-dark">Izin Belajar</a></li>
            <li class="breadcrumb-item active"><a href="#" class="text-dark active">Edit Pengajuan</a></li>
        </ol>
    </div>
    {{-- BREADCUMBS --}}

    @if ($ib->alasan_penolakan != null)
    <div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
        <span><b>Alasan Ditolak :</b> {{ $ib->alasan_penolakan }}</span>
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

    {{-- FORM --}}
    <form action="{{ route('user.izin-belajar.update', $ib->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @if (\Session::has('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span>{!! \Session::get('danger') !!}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        {{-- DATA INSTITUSI --}}
        <div class="card justify-content-center shadow-sm mb-5">
            <h5 class="card-header px-5">Data Institusi Tujuan</h5>
            <div class="card-body px-5">
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nomor Induk Kependudukan</label>
                    <div class="col-sm-9">
                        <input required type="text" class="form-control" id="nik" name="nik" value="{{ $ib->nik }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama Institusi Pendidikan</label>
                    <div class="col-sm-9">
                        <input required type="text" class="form-control" id="institusi_pendidikan"
                            name="institusi_pendidikan" value="{{ $ib->nama_institusi }}">
                    </div>
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <label class="col-sm-3 col-form-label">Akreditasi</label>
                    <div class="col-sm-9">
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="akreditasi" id="akreditasi_a"
                                value="A" {{ $ib->akreditasi_institusi == 'A' ? 'checked' : '' }}>
                            <label class="form-check-label">A</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="akreditasi" id="akreditasi_b"
                                value="B" {{ $ib->akreditasi_institusi == 'B' ? 'checked' : '' }}>
                            <label class="form-check-label">B</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <textarea name="alamat" id="alamat" class="form-control">{{ $ib->alamat_institusi }}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-9">
                        <input required type="text" class="form-control" id="no_telp" name="no_telp"
                            value="{{ $ib->telp_institusi }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Jurusan</label>
                    <div class="col-sm-9">
                        <input required type="text" class="form-control" id="jurusan" name="jurusan"
                            value="{{ $ib->jurusan }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Program Studi</label>
                    <div class="col-sm-9">
                        <input required type="text" class="form-control" id="program_studi" name="program_studi"
                            value="{{ $ib->jurusan }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Tahun Ajaran</label>
                    <div class="col-sm-9">
                        <input required type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran"
                            value="{{ $ib->tahun_ajaran }}">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label class="col-sm-3 col-form-label">Jenjang Pendidikan</label>
                    <div class="col-sm-9 d-flex align-items-center">
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="jenjang_pendidikan"
                                id="jenjang_pendidikan_s1" value="S1" {{ $ib->jenjang_pendidikan == "S1" ? 'checked' :
                            ''
                            }}>
                            <label class="form-check-label">Strata-1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="jenjang_pendidikan"
                                id="jenjang_pendidikan_s2" value="S2" {{ $ib->jenjang_pendidikan == "S2" ? 'checked' :
                            ''
                            }}>
                            <label class="form-check-label">Strata-2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="jenjang_pendidikan"
                                id="jenjang_pendidikan_s3" value="S3" {{ $ib->jenjang_pendidikan == "S3" ? 'checked' :
                            ''
                            }}>
                            <label class="form-check-label">Strata-3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="jenjang_pendidikan"
                                id="jenjang_pendidikan_s3" value="PPDS" {{ $ib->jenjang_pendidikan == "PPDS" ? 'checked'
                            :
                            '' }}>
                            <label class="form-check-label">PPDS</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- DATA INSTITUSI --}}

        {{-- BERKAS PRIBADI --}}
        <div class="card justify-content-center shadow-sm my-5">
            <h5 class="card-header px-5">Berkas Pribadi</h5>
            <div class="card-body px-5">
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Ijazah Terakhir</label>
                    <div class="col-sm-7">
                        <input required type="file" accept="application/pdf" accept="application/pdf"
                            class="form-control" id="ijazah_terakhir" name="ijazah_terakhir"
                            placeholder="Ijazah Terakhir">
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ asset('storage/' . $ib->ijazah_terakhir) }}" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Transkrip Nilai</label>
                    <div class="col-sm-7">
                        <input required type="file" accept="application/pdf" accept="application/pdf"
                            class="form-control" id="transkrip_nilai" name="transkrip_nilai">
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ asset('storage/' . $ib->transkrip_nilai) }}" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- BERKAS PRIBADI --}}

        {{-- BERKAS KEPROFESIAN --}}
        <div class="card justify-content-center shadow-sm my-5">
            <h5 class="card-header px-5">Berkas Keprofesian</h5>
            <div class="card-body px-5">
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Surat Keterangan Pegawai Negeri Sipil</label>
                    <div class="col-sm-7">
                        <input required type="file" accept="application/pdf" accept="application/pdf"
                            class="form-control" id="sk_pns" name="sk_pns">
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ asset('storage/' . $ib->sk_pns) }}" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Surat Keterangan Pangkat Terakhir</label>
                    <div class="col-sm-7">
                        <input required type="file" accept="application/pdf" accept="application/pdf"
                            class="form-control" id="sk_pangkat_terakhir" name="sk_pangkat_terakhir">
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ asset('storage/' . $ib->sk_pangkat_terakhir) }}" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mb-3 row d-flex align-items-center">
                    <label class="col-sm-3 col-form-label">SKP Terakhir</label>
                    <div class="col-sm-7">
                        <input required type="file" accept="application/pdf" accept="application/pdf"
                            class="form-control" id="skp_terakhir" name="skp_terakhir">
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ asset('storage/' . $ib->skp_terakhir) }}" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Kartu Pegawai</label>
                    <div class="col-sm-7">
                        <input required type="file" accept="application/pdf" accept="application/pdf"
                            class="form-control" id="kartu_pegawai" name="kartu_pegawai">
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ asset('storage/' . $ib->kartu_pegawai) }}" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- BERKAS KEPROFESIAN --}}

        {{-- BERKAS INSTITUSI TUJUAN --}}
        <div class="card justify-content-center shadow-sm mt-5 mb-4">
            <h5 class="card-header px-5">Berkas Institusi Tujuan</h5>
            <div class="card-body px-5">
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Surat Keterangan Kelas Reguler</label>
                    <div class="col-sm-7">
                        <input required type="file" accept="application/pdf" accept="application/pdf"
                            class="form-control" id="sk_kelas_reguler" name="sk_kelas_reguler">
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ asset('storage/' . $ib->sk_kelas_reguler) }}" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mb-3 row d-flex align-items-center">
                    <label class="col-sm-3 col-form-label">Akreditasi Jurusan/Kampus</label>
                    <div class="col-sm-7">
                        <input required type="file" accept="application/pdf" accept="application/pdf"
                            class="form-control" id="file_akreditasi_institusi" name="file_akreditasi_institusi">
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ asset('storage/' . $ib->file_akreditasi_institusi) }}" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- BERKAS INSTITUSI TUJUAN --}}

        {{-- BUTTON SUBMIT --}}
        <div class="w-100 d-flex justify-content-end">
            <button class="btn btn-success w-10 submit" type="submit">Submit</button>
        </div>
        {{-- BUTTON SUBMIT --}}
    </form>
    {{-- FORM --}}
</div>
@endsection