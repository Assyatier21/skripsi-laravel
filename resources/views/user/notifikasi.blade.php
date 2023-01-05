@extends('layouts.user.app')
@section('title', 'Dashboard')

@section('css')
@endsection

@section('content')
<div class="px-5 py-2">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" colspan="3" class="text-start"><i class="fa-solid fa-bell me-2"></i>Notifikasi</th>
                    <a href="#" class="text-end read-all">
                        <th scope="col" class="text-end" style="text-decoration: underline; cursor: pointer;">Tandai
                            Baca Semua</th>
                    </a>
                </tr>
            </thead>
            <tbody>
                <tr class="align-items-center">
                    <td colspan="2">Selamat Diterima!</td>
                    <td colspan="4"></td>
                </tr>
                <tr class="align-items-center">
                    <td colspan="2">Selamat Diterima!</td>
                    <td colspan="4"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection