<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\User;
use App\Http\Controllers\Controller;

class DocumentGeneratorController extends Controller
{
    public function surat_abk()
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        return view('docs.surat_abk', compact('user'));
    }
    public function surat_permohonan_ib()
    {
        $user = User::whereNip(auth()->user()->nip)->first();
        return view('docs.surat_permohonan_ib', compact('user'));
    }
}
