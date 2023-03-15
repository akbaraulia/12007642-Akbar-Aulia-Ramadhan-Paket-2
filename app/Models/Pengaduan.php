<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduans';
    protected $fillable = [
        'nama_pelapor',
        'tgl_pengaduan',
        'isi_laporan',
        'nik',
        'foto',
        'status',
        
    ];

}
