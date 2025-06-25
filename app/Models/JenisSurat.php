<?php

namespace App\Models;

use App\Models\PengajuanSurat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisSurat extends Model
{
    use HasFactory;
    protected $table = 'jenis_surats';

    protected $fillable = [
        'nama_surat',
        'kode_surat',
        'deskripsi',
        'file_template',
    ];

    public function pengajuans()
    {
        return $this->hasMany(PengajuanSurat::class);
    }
}
