@extends('layouts.admin.app')
@section('title', 'Verifikasi Izin Belajar')

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
            <li class="breadcrumb-item"><a href="{{ route('admin.izin-belajar.index') }}" class="text-dark">Izin
                    Belajar</a></li>
            <li class="breadcrumb-item text-success">Verifikasi Pengajuan
            </li>
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
                <label class="col-sm-3 col-form-label">Nama Institusi Pendidikan</label>
                <div class="col-sm-9">
                    <input disabled readonly type="text" class="form-control" id="institusi_pendidikan"
                        name="institusi_pendidikan" value="{{ $ib->nama_institusi }}">
                </div>
            </div>
            <div class="mb-1 row d-flex align-items-center">
                <label class="col-sm-3 col-form-label">Akreditasi</label>
                <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                        <input disabled class="form-check-input" type="radio" name="akreditasi" id="akreditasi_a"
                            value="A" {{ $ib->akreditasi_institusi == 'A' ? 'checked' : '' }}>
                        <label class="form-check-label">A</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input disabled class="form-check-input" type="radio" name="akreditasi" id="akreditasi_b"
                            value="B" {{ $ib->akreditasi_institusi == 'B' ? 'checked' : '' }}>
                        <label class="form-check-label">B</label>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                    <textarea disabled readonly name="alamat" id="alamat"
                        class="form-control">{{ $ib->alamat_institusi }}</textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                <div class="col-sm-9">
                    <input disabled readonly type="text" class="form-control" id="no_telp" name="no_telp"
                        value="{{ $ib->telp_institusi }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jurusan</label>
                <div class="col-sm-9">
                    <input disabled readonly type="text" class="form-control" id="jurusan" name="jurusan"
                        value="{{ $ib->jurusan }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Program Studi</label>
                <div class="col-sm-9">
                    <input disabled readonly type="text" class="form-control" id="program_studi" name="program_studi"
                        value="{{ $ib->jurusan }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Tahun Ajaran</label>
                <div class="col-sm-9">
                    <input disabled readonly type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran"
                        value="{{ $ib->tahun_ajaran }}">
                </div>
            </div>
            <div class="mb-1 row">
                <label class="col-sm-3 col-form-label">Jenjang Pendidikan</label>
                <div class="col-sm-9 d-flex align-items-center">
                    <div class="form-check form-check-inline">
                        <input disabled readonly class="form-check-input" type="radio" name="jenjang_pendidikan"
                            id="jenjang_pendidikan_s1" value="S1" {{ $ib->jenjang_pendidikan == "S1" ? 'checked' : ''
                        }}>
                        <label class="form-check-label">Strata-1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input disabled readonly class="form-check-input" type="radio" name="jenjang_pendidikan"
                            id="jenjang_pendidikan_s2" value="S2" {{ $ib->jenjang_pendidikan == "S2" ? 'checked' : ''
                        }}>
                        <label class="form-check-label">Strata-2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input disabled readonly class="form-check-input" type="radio" name="jenjang_pendidikan"
                            id="jenjang_pendidikan_s3" value="S3" {{ $ib->jenjang_pendidikan == "S3" ? 'checked' : ''
                        }}>
                        <label class="form-check-label">Strata-3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input disabled readonly class="form-check-input" type="radio" name="jenjang_pendidikan"
                            id="jenjang_pendidikan_s3" value="PPDS" {{ $ib->jenjang_pendidikan == "PPDS" ? 'checked' :
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
                <div class="col-sm-9">
                    <a href="{{ asset('storage/' . $ib->transkrip_nilai) }}" target="_blank">
                        <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                            <i class="fa-solid fa-eye me-2"></i>
                            <p class="m-0">Lihat Berkas</p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Surat Pernyataan</label>
                <div class="col-sm-9">
                    <a href="{{ asset('storage/' . $ib->surat_pernyataan) }}" target="_blank">
                        <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                            <i class="fa-solid fa-eye me-2"></i>
                            <p class="m-0">Lihat Berkas</p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Surat Permohonan</label>
                <div class="col-sm-9">
                    <a href="{{ asset('storage/' . $ib->surat_permohonan) }}" target="_blank">
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
                <div class="col-sm-9">
                    <a href="{{ asset('storage/' . $ib->ijazah_terakhir) }}" target="_blank">
                        <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                            <i class="fa-solid fa-eye me-2"></i>
                            <p class="m-0">Lihat Berkas</p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Surat Keterangan Terakhir</label>
                <div class="col-sm-9">
                    <a href="{{ asset('storage/' . $ib->sk_pns) }}" target="_blank">
                        <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                            <i class="fa-solid fa-eye me-2"></i>
                            <p class="m-0">Lihat Berkas</p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="mb-3 row d-flex align-items-center">
                <label class="col-sm-3 col-form-label">Penilaian Prestasi Kinerja Pegawai</label>
                <div class="col-sm-9">
                    <a href="{{ asset('storage/' . $ib->ppkp) }}" target="_blank">
                        <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                            <i class="fa-solid fa-eye me-2"></i>
                            <p class="m-0">Lihat Berkas</p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Uraian Tugas</label>
                <div class="col-sm-9">
                    <a href="{{ asset('storage/' . $ib->uraian_tugas) }}" target="_blank">
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
                <div class="col-sm-9">
                    <a href="{{ asset('storage/' . $ib->sk_kelas_reguler) }}" target="_blank">
                        <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                            <i class="fa-solid fa-eye me-2"></i>
                            <p class="m-0">Lihat Berkas</p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jadwal Kelas Reguler</label>
                <div class="col-sm-9">
                    <a href="{{ asset('storage/' . $ib->jadwal_kelas_reguler) }}" target="_blank">
                        <button class="btn btn-secondary d-flex flex-col align-items-center" type="button">
                            <i class="fa-solid fa-eye me-2"></i>
                            <p class="m-0">Lihat Berkas</p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="mb-3 row d-flex align-items-center">
                <label class="col-sm-3 col-form-label">Akreditasi Jurusan/Kampus</label>
                <div class="col-sm-9">
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

    @if((auth()->guard('admin')->user()->role == '1' && $ib->status_pengajuan == 0) ||
    (auth()->guard('admin')->user()->role == '2' && $ib->status_pengajuan == 1))
    {{-- BUTTON SUBMIT --}}
    <div class="w-100 d-flex justify-content-center">
        {{-- FORM TERIMA --}}
        <form action="{{ route('admin.izin-belajar.update', $ib->id) }}" method="POST" class="text-center">
            @csrf @method('PUT')
            <button class="btn btn-success mx-2"
                onclick="return confirm('Apakah Anda Yakin Ingin Menyetujui Pengajuan Ini?')" type="submit" id="terima"
                name="terima">Terima</button>
        </form>
        {{-- FORM TERIMA --}}

        {{-- FORM TOLAK --}}
        <form action="{{ route('admin.izin-belajar.update', $ib->id) }}" method="POST" class="text-center">
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