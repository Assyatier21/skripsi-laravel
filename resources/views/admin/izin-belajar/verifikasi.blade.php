@extends('layouts.admin.app')
@section('title', 'Verifikasi Izin Belajar')

@section('css')
<style>
    .btn.w-10 {
        width: 10% !important;
    }
</style>
@endsection

@section('content')
<div class="px-5 pt-4 pb-5 main-content">
    {{-- BREADCUMBS --}}
    <div aria-label="breadcrumb p-5">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="text-dark">Izin Belajar</a></li>
            <li class="breadcrumb-item active"><a href="#" class="text-dark active">Verifikasi</a></li>
        </ol>
    </div>
    {{-- BREADCUMBS --}}

    {{-- FORM --}}
    <form action="" autocomplete="off">
        {{-- DATA INSTITUSI --}}
        <div class="card justify-content-center shadow-sm mb-5">
            <h5 class="card-header px-5">Data Institusi Tujuan</h5>
            <div class="card-body px-5">
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Nama Institusi Pendidikan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="institusi_pendidikan" name="institusi_pendidikan"
                            value="Institusi">
                    </div>
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="" class="col-sm-3 col-form-label">Akreditasi</label>
                    <div class="col-sm-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="akreditas" id="akreditasi_a" value="A"
                                checked>
                            <label class="form-check-label" for="">A</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="akreditas" id="akreditasi_b" value="B">
                            <label class="form-check-label" for="">B</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <textarea name="alamat" id="alamat"
                            class="form-control">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor provident assumenda possimus laborum sint vero excepturi distinctio in culpa explicabo ducimus quis incidunt natus, voluptatum consectetur sed beatae et pariatur!</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="087786355690">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Jurusan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="jurusan" name="jurusan" value="Teknik Informatika">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Program Studi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="program_studi" name="program_studi"
                            value="Informatika Reguler">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Tahun Ajaran</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran" value="2018">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="" class="col-sm-3 col-form-label">Jenjang Pendidikan</label>
                    <div class="col-sm-9 d-flex align-items-center">
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
            </div>
        </div>
        {{-- DATA INSTITUSI --}}

        {{-- BERKAS PRIBADI --}}
        <div class="card justify-content-center shadow-sm my-5">
            <h5 class="card-header px-5">Berkas Pribadi</h5>
            <div class="card-body px-5">
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Ijazah Terakhir</label>
                    <div class="col-sm-9">
                        <a href="#" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Transkrip Nilai</label>
                    <div class="col-sm-9">
                        <a href="#" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Surat Pernyataan</label>
                    <div class="col-sm-9">
                        <a href="#" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Surat Permohonan</label>
                    <div class="col-sm-9">
                        <a href="#" target="_blank">
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
                    <label for="" class="col-sm-3 col-form-label">Surat Keterangan Pegawai Negeri Sipil</label>
                    <div class="col-sm-9">
                        <a href="#" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Surat Keterangan Terakhir</label>
                    <div class="col-sm-9">
                        <a href="#" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mb-3 row d-flex align-items-center">
                    <label for="" class="col-sm-3 col-form-label">Penilaian Prestasi Kinerja Pegawai</label>
                    <div class="col-sm-9">
                        <a href="#" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Uraian Tugas</label>
                    <div class="col-sm-9">
                        <a href="#" target="_blank">
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
                    <label for="" class="col-sm-3 col-form-label">Surat Keterangan Kelas Reguler</label>
                    <div class="col-sm-9">
                        <a href="#" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Jadwal Kelas Reguler</label>
                    <div class="col-sm-9">
                        <a href="#" target="_blank">
                            <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                                <i class="fa-solid fa-eye me-2"></i>
                                <p class="m-0">Lihat Berkas</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mb-3 row d-flex align-items-center">
                    <label for="" class="col-sm-3 col-form-label">Akreditasi Jurusan/Kampus</label>
                    <div class="col-sm-9">
                        <a href="#" target="_blank">
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
        <div class="w-100 d-flex justify-content-center">
            <button class="btn btn-success w-10 submit mx-2">Terima</button>
            <button class="btn btn-danger w-10 submit mx-2">Tolak</button>
        </div>
        {{-- BUTTON SUBMIT --}}
    </form>
    {{-- FORM --}}
</div>
@endsection