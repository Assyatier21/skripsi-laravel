@extends('layouts.user.app')
@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/user/beranda.css') }}">
@endsection

@section('content')
<div class="px-5 py-2 mb-4">
    <div class="w-100 d-flex justify-content-center my-4">
        <a href="#">
            <img src="{{ asset('assets/images/banner -1.jpeg') }}" alt="">
        </a>
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