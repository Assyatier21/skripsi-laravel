<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentGeneratorController extends Controller
{
    public function surat_abk()
    {
        return view('docs.surat_abk');
    }
}
