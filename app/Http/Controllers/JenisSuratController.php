<?php

namespace App\Http\Controllers;

use App\Models\JenisSurat;
use Illuminate\Http\Request;

class JenisSuratController extends Controller
{
    public function index(){
        $jenisSurat = JenisSurat::all();
        return view('admin.surat.jenis.index', compact('jenisSurat'));
    }
}
