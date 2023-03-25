@extends('layouts.user.app')
@section('title', 'Download Dokumen TB')

@section('css')
@endsection

@section('content')
<div class="px-5 py-2 my-4 d-flex w-100 flex-column justify-content-center align-items-center">
    <div class="w-100 d-flex justify-content-center my-2">
        <a href="{{ route('user.surat_pembebasan.tb', $id) }}" class="w-100">
            <button class="btn btn-success w-100"><i class="fas fa-download text-uppercase me-3"></i>Download Surat
                Pembebasan Tugas</button>
        </a>
    </div>
    <div class="w-100 d-flex justify-content-center my-2">
        <a href="{{ route('user.surat_rekomendasi.tubel', $id) }}" class="w-100">
            <button class="btn btn-success w-100"><i class="fas fa-download text-uppercase me-3"></i>Download Surat
                Rekomendasi Tugas Belajar</button>
        </a>
    </div>
</div>
@endsection