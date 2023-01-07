@extends('layouts.user.app')
@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/user/beranda.css') }}">
@endsection

@section('content')
<div class="px-5 py-2">
    <div class="w-100 d-flex justify-content-center my-4">
        <a href="#">
            <img src="{{ asset('assets/images/banner -1.jpeg') }}" alt="">
        </a>
    </div>
    <div class="w-100 d-flex justify-content-start my-4 py-3">
        <a href="#">
            <img src="{{ asset('assets/images/banner -1.jpeg') }}" alt="">
        </a>
    </div>
    <div class="w-100 d-flex justify-content-end my-4">
        <a href="#">
            <img src="{{ asset('assets/images/banner -1.jpeg') }}" alt="">
        </a>
    </div>
</div>
@endsection