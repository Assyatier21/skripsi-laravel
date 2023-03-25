@extends('layouts.user.app')
@section('title', 'Download Dokumen IB')

@section('css')
@endsection

@section('content')
<div class="px-5 py-2 my-4 d-flex w-100 flex-column justify-content-center align-items-center">
    <div class="w-100 d-flex justify-content-center my-2">
        <a href="{{ route('user.ib.1', $id) }}" class="w-100">
            <button class="btn btn-success w-100"><i class="fas fa-download text-uppercase me-3"></i>Download Formulir
                Data Diri</button>
        </a>
    </div>
    <div class="w-100 d-flex justify-content-center my-2">
        <a href="{{ route('user.ib.2', $id) }}" class="w-100">
            <button class="btn btn-success w-100"><i class="fas fa-download text-uppercase me-3"></i>Download Surat
                Pernyataan</button>
        </a>
    </div>
    <div class="w-100 d-flex justify-content-center my-2">
        <a href="{{ route('user.ib.3', $id) }}" class="w-100">
            <button class="btn btn-success w-100"><i class="fas fa-download text-uppercase me-3"></i>Download Surat
                Permohonan</button>
        </a>
    </div>
    <div class="w-100 d-flex justify-content-center my-2">
        <a href="{{ route('user.surat.abk', $id) }}" class="w-100">
            <button class="btn btn-success w-100"><i class="fas fa-download text-uppercase me-3"></i>Download Surat
                Analisis Jabatan dan Analisis Beban Kerja</button>
        </a>
    </div>
</div>
@endsection