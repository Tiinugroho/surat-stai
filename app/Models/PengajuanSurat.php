<?php

namespace App\Models;

use App\Models\User;
use App\Models\JenisSurat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengajuanSurat extends Model
{
    use HasFactory;
    protected $table = 'pengajuan_surats';

    protected $fillable = [
        'user_id',
        'jenis_surat_id',
        'keperluan',
        'file_pendukung',
        'file_surat_jadi',
        'status_kaprodi',
        'status_lektor',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jenisSurat()
    {
        return $this->belongsTo(JenisSurat::class);
    }
}

