@extends('layouts.user.app')
@section('title', 'Notifikasi')

@section('css')
@endsection

@section('content')
<div class="px-5 py-2">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-start"><i class="fa-solid fa-bell me-2"></i>Notifikasi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($notifikasi as $n)
                <tr class="align-items-center">
                    <td colspan="2">{{ $n->pesan }}</td>
                </tr>
                @empty
                <tr class="align-items-center">
                    <td>Anda Belum Memiliki Notifikasi</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection