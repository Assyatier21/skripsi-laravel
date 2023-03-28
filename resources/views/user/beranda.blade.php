@extends('layouts.user.app')
@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/user/beranda.css') }}">
@endsection

@section('content')
<div class="px-5 py-2 mb-4">
    <div class="px-5 py-5 d-flex flex-row justify-content-center bg-secondary">
        <div class="w-fit">
            <img src="{{ asset('assets/images/landing-page.png') }}" class="img-fluid img-thumbnail" alt="">
        </div>
        <div class="flex flex-col mx-5 align-self-center">
            <h2 class="justify-content-center text-white">Pengajuan Izin Belajar dan Tugas Belajar</h2>
            <p class="text-white">Dalam pelaksanaan studi lanjut dapat dilakukan dengan dua cara yaitu, melalui tugas belajar dan izin belajar. Pada dasarnya, tugas belajar dan izin belajar yang diberikan kepada dosen keduanya sama-sama diberikan untuk melanjutkan pendidikan ke jenjang yang lebih tinggi. Akan tetapi, terdapat beberapa perbedaan di antara keduanya.</p>
        </div>
    </div>
    <div class="w-100 d-flex justify-content-start my-4 py-3">
        <a href="{{ route('user.izin-belajar.informasi') }}">
            <img src="{{ asset('assets/images/content-2-ref.png') }}" alt="">
        </a>
    </div>
    <div class="w-100 d-flex justify-content-end my-5">
        <a href="{{ route('user.tugas-belajar.informasi') }}">
            <img src="{{ asset('assets/images/content-3-ref.png') }}" alt="">
        </a>
    </div>
</div>
@endsection