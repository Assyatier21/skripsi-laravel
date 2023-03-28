@extends('layouts.user.app')
@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/user/beranda.css') }}">
@endsection

@section('content')
<div class="px-5 py-5 d-flex flex-row justify-content-center ">
    <div class="w-fit">
        <img src="{{ asset('assets/images/landing-page.png') }}" class="img-fluid img-thumbnail w-" alt="">
    </div>
    <div class="flex flex-col mx-5 align-self-center">
        <h2 class="justify-content-center">Pengajuan Izin Belajar dan Tugas Belajar</h2>
        <p class="mx-5">Dalam pelaksanaan studi lanjut dapat dilakukan dengan dua cara yaitu, melalui tugas belajar dan izin belajar. Pada dasarnya, tugas belajar dan izin belajar yang diberikan kepada dosen keduanya sama-sama diberikan untuk melanjutkan pendidikan ke jenjang yang lebih tinggi. Akan tetapi, terdapat beberapa perbedaan di antara keduanya.</p>
    </div>
</div>
@endsection