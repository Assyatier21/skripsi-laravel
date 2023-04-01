<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\IzinBelajar;
use App\Models\Pengajuanku;
use App\Models\TugasBelajar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexAdminController extends Controller
{
    public function index()
    {
        $information = [
            "user" => User::count(),
            "total_pengajuan" => Pengajuanku::where('status_pengajuan', '!=', '2')->count(),
            "total_ib" => IzinBelajar::where('status_pengajuan', '!=', '2')->count(),
            "total_tb" => TugasBelajar::where('status_pengajuan', '!=', '2')->count(),
        ];

        if (auth()->guard('admin')->user()->role == '2') {
            $ib = IzinBelajar::with('user')->where('status_pengajuan', '1')->orderByDesc('id')->paginate(5, ['*'], 'ib');
            $tb = TugasBelajar::with('user')->where('status_pengajuan', '1')->orderByDesc('id')->paginate(5, ['*'], 'tb');
        } else {
            $ib = IzinBelajar::with('user')->where('status_pengajuan', '!=', '2')->orderByDesc('id')->paginate(5, ['*'], 'ib');
            $tb = TugasBelajar::with('user')->where('status_pengajuan', '!=', '2')->orderByDesc('id')->paginate(5, ['*'], 'tb');
        }

        return view('admin.beranda', compact('information', 'ib', 'tb'));
    }
}
