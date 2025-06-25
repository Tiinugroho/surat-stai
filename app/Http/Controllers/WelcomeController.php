<?php

namespace App\Http\Controllers;

use App\Models\JenisSurat;
use App\Models\PengajuanSurat;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $jenisSurats = JenisSurat::all();
        return view('welcome', compact('jenisSurats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_surat_id' => 'required|exists:jenis_surats,id',
            'keperluan' => 'required|string',
            'file_pendukung' => 'nullable|file|mimes:pdf,jpg,jpeg,png,docx|max:2048',
        ]);

        $fileName = null;
        if ($request->hasFile('file_pendukung')) {
            $fileName = $request->file('file_pendukung')->store('file_pendukung');
        }

        PengajuanSurat::create([
            'user_id' => auth()->id(),
            'jenis_surat_id' => $request->jenis_surat_id,
            'keperluan' => $request->keperluan,
            'file_pendukung' => $fileName,
            'status_kaprodi' => 'proses',
            'status_lektor' => 'proses',
        ]);

        return redirect()->route('welcome.index')->with('success', 'Pengajuan surat berhasil diajukan.');
    }

    public function suratSaya()
    {
        $jenisSurats = JenisSurat::all();
        $surats = PengajuanSurat::where('user_id', auth()->id())
            ->with('jenisSurat')
            ->latest()
            ->get();
        return view('surat.index', compact('surats','jenisSurats'));
    }
}
