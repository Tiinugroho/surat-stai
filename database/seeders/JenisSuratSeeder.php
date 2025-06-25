<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenisSurat;

class JenisSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisSurat::create([
            'nama_surat' => 'Surat Keterangan Bebas Pustaka',
            'kode_surat' => 'BP',
            'deskripsi' => 'Surat yang menyatakan bahwa mahasiswa telah bebas dari kewajiban pustaka.',
        ]);

        JenisSurat::create([
            'nama_surat' => 'Surat Keterangan Aktif Kuliah',
            'kode_surat' => 'AK',
            'deskripsi' => 'Surat yang menyatakan bahwa mahasiswa sedang aktif kuliah.',
        ]);

        JenisSurat::create([
            'nama_surat' => 'Surat Permohonan Cuti Akademik',
            'kode_surat' => 'CA',
            'deskripsi' => 'Surat yang digunakan untuk mengajukan cuti akademik.',
        ]);

        JenisSurat::create([
            'nama_surat' => 'Surat Permohonan Pengunduran Diri',
            'kode_surat' => 'PD',
            'deskripsi' => 'Surat yang digunakan untuk mengajukan pengunduran diri dari program studi.',
        ]);
    }
}
