@extends('layouts.admin.app')
@section('title', 'Verifikasi Tugas Belajar')

@section('css')
<style>
    .btn.w-10 {
        width: 10% !important;
    }

    .text-success {
        color: #00b579 !important;
    }
</style>
@endsection

@section('content')
<div class="px-5 pt-4 pb-5 main-content">
    {{-- BREADCUMBS --}}
    <div aria-label="breadcrumb p-5">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url()->previous() }}" class="text-dark">Tugas
                    Belajar</a></li>
            <li class="breadcrumb-item active text-success">Verifikasi Pengajuan</li>
        </ol>
    </div>
    {{-- BREADCUMBS --}}

    @if (\Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show p-4" role="alert">
        <span>{!! \Session::get('success') !!}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif (\Session::has('danger'))
    <div class="alert alert-success alert-dismissible fade show p-4" role="alert">
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
                    <input disabled readonly type="text" class="form-control" id="nik" name="nik"
                        value="{{ $tb->nik }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Institusi Pendidikan</label>
                <div class="col-sm-9">
                    <input disabled readonly type="text" class="form-control" id="institusi_pendidikan"
                        name="institusi_pendidikan" value="{{ $tb->nama_institusi }}">
                </div>
            </div>
            <div class="mb-1 row d-flex align-items-center">
                <label class="col-sm-3 col-form-label">Akreditasi</label>
                <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                        <input disabled class="form-check-input" type="radio" name="akreditasi" id="akreditasi_a"
                            value="A" {{ $tb->akreditasi_institusi == 'A' ? 'checked' : '' }}>
                        <label class="form-check-label">A</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input disabled class="form-check-input" type="radio" name="akreditasi" id="akreditasi_b"
                            value="B" {{ $tb->akreditasi_institusi == 'B' ? 'checked' : '' }}>
                        <label class="form-check-label">B</label>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                    <textarea disabled readonly name="alamat" id="alamat"
                        class="form-control">{{ $tb->alamat_institusi }}</textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                <div class="col-sm-9">
                    <input disabled readonly type="text" class="form-control" id="no_telp" name="no_telp"
                        value="{{ $tb->telp_institusi }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jurusan</label>
                <div class="col-sm-9">
                    <input disabled readonly type="text" class="form-control" id="jurusan" name="jurusan"
                        value="{{ $tb->jurusan }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Program Studi</label>
                <div class="col-sm-9">
                    <input disabled readonly type="text" class="form-control" id="program_studi" name="program_studi"
                        value="{{ $tb->jurusan }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Tahun Ajaran</label>
                <div class="col-sm-9">
                    <input disabled readonly type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran"
                        value="{{ $tb->tahun_ajaran }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Tautan Beasiswa</label>
                <div class="col-sm-9">
                    <input disabled readonly type="text" class="form-control" id="link_beasiswa" name="link_beasiswa"
                        value="{{ $tb->link_beasiswa }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jenjang Pendidikan</label>
                <div class="col-sm-9 d-flex align-items-center">
                    <div class="form-check form-check-inline">
                        <input disabled readonly class="form-check-input" type="radio" name="jenjang_pendidikan"
                            id="jenjang_pendidikan_s1" value="S1" {{ $tb->jenjang_pendidikan == "S1" ? 'checked' : ''
                        }}>
                        <label class="form-check-label">Strata-1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input disabled readonly class="form-check-input" type="radio" name="jenjang_pendidikan"
                            id="jenjang_pendidikan_s2" value="S2" {{ $tb->jenjang_pendidikan == "S2" ? 'checked' : ''
                        }}>
                        <label class="form-check-label">Strata-2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input disabled readonly class="form-check-input" type="radio" name="jenjang_pendidikan"
                            id="jenjang_pendidikan_s3" value="S3" {{ $tb->jenjang_pendidikan == "S3" ? 'checked' : ''
                        }}>
                        <label class="form-check-label">Strata-3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input disabled readonly class="form-check-input" type="radio" name="jenjang_pendidikan"
                            id="jenjang_pendidikan_s3" value="PPDS" {{ $tb->jenjang_pendidikan == "PPDS" ? 'checked' :
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
                <div class="col-sm-9">
                    <a href="{{ asset('storage/' . $tb->ijazah_terakhir) }}" target="_blank">
                        <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                            <i class="fa-solid fa-eye me-2"></i>
                            <p class="m-0">Lihat Berkas</p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Transkrip Nilai</label>
                <div class="col-sm-9">
                    <a href="{{ asset('storage/' . $tb->transkrip_nilai) }}" target="_blank">
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
                <label class="col-sm-3 col-form-label">Surat Keterangan Jabatan Fungsional</label>
                <div class="col-sm-9">
                    <a href="{{ asset('storage/' . $tb->sk_jabatan_fungsional) }}" target="_blank">
                        <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                            <i class="fa-solid fa-eye me-2"></i>
                            <p class="m-0">Lihat Berkas</p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">SK Terakhir</label>
                <div class="col-sm-9">
                    <a href="{{ asset('storage/' . $tb->sk_terakhir) }}" target="_blank">
                        <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                            <i class="fa-solid fa-eye me-2"></i>
                            <p class="m-0">Lihat Berkas</p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="mb-3 row d-flex align-items-center">
                <label class="col-sm-3 col-form-label">PAK Terakhir</label>
                <div class="col-sm-9">
                    <a href="{{ asset('storage/' . $tb->pak_terakhir) }}" target="_blank">
                        <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                            <i class="fa-solid fa-eye me-2"></i>
                            <p class="m-0">Lihat Berkas</p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="mb-3 row d-flex align-items-center">
                <label class="col-sm-3 col-form-label">SKP Terakhir</label>
                <div class="col-sm-9">
                    <a href="{{ asset('storage/' . $tb->skp_terakhir) }}" target="_blank">
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

    @if((auth()->guard('admin')->user()->role == '1' && $tb->status_pengajuan == 0) ||
    (auth()->guard('admin')->user()->role == '2' && $tb->status_pengajuan == 1))
    {{-- BUTTON SUBMIT --}}
    <div class="w-100 d-flex justify-content-center">
        {{-- FORM TERIMA --}}
        <form action="{{ route('admin.tugas-belajar.update', $tb->id) }}" method="POST" class="text-center"
            enctype="multipart/form-data">
            @csrf @method('PUT')
            <button class="btn btn-success mx-2" type="button" data-bs-toggle="modal"
                data-bs-target="#terima">Terima</button>
            <div class="modal fade" id="terima" tabindex="-1" aria-labelledby="menolakLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger" id="menolakModalLabel">Perhatian</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-start">
                            <div class="mb-3">
                                <label for="formFile" class="form-label text-start ms-2">Tanda Tangan Digital</label>
                                <input class="form-control" type="file" id="ttd" name="ttd">
                            </div>
                            <small class="text-danger text-start ms-2">* Tanda Tangan Hanya Dikhususkan Bagi Direktur
                                dan
                                Bersifat Wajib!</small>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" name="batalkan" id="batalkan"
                                data-bs-dismiss="modal">Batalkan</button>
                            <button type="submit" class="btn btn-success" id="terima" name="terima">Terima</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {{-- FORM TERIMA --}}

        {{-- FORM TOLAK --}}
        <form action="{{ route('admin.tugas-belajar.update', $tb->id) }}" method="POST" class="text-center">
            @csrf @method('PUT')
            <button class=" btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#menolak">Tolak</button>
            <div class="modal fade" id="menolak" tabindex="-1" aria-labelledby="menolakLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="menolakModalLabel">Alasan Menolak</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <textarea name="alasan" maxlength="150" required class="w-100 form-control" id="alasan"
                                rows="5" required></textarea>
                            <small class="text-danger">* Masukkan Alasan Anda Menolak Pengajuan Izin Belajar
                                Diatas!</small>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button class="btn btn-danger" type="submit" name="tolak" id="tolak">Tolak</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {{-- FORM TOLAK --}}
    </div>
    {{-- BUTTON SUBMIT --}}
    @else
    {{-- BUTTON SUBMIT IF DIREKTUR STILL HAS NO ACCESS --}}
    <div class="w-100 d-flex justify-content-center">
        <button class="btn btn-success mx-2" disabled>Terima</button>
        <button class=" btn btn-danger mx-2" disabled>Tolak</button>
    </div>
    {{-- BUTTON SUBMIT IF DIREKTUR STILL HAS NO ACCESS --}}
    @endif

</div>
@endsection