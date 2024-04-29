<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillabel = [
        'nis',
        'nama',
        'jk',
        'kelas',
        'alamat'
    ];

    protected $table = 'siswa_tabel';
}
