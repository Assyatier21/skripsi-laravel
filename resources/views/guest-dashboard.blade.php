@extends('layouts.user.app')
@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/user/beranda.css') }}">
@endsection

@section('content')
<div class="px-5 py-5 d-flex justify-content-center">
    <img src="{{ asset('assets/images/banner -1.jpeg') }}" alt="">
</div>
@endsection