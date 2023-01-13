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
        $html = view('docs.surat_abk', compact('user'))->render();
        $dompdf = new Dompdf();

        $dompdf->set_paper('A4', 'potrait');
        $dompdf->loadHtml($html);
        $dompdf->render();
        return $dompdf->stream();
    }
}
