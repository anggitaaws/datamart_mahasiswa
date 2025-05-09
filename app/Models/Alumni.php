<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'data_alumni';

    protected $fillable =
    [
        'name',
        'nim',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'asal_slta',
        'program_studi',
        'angkatan_alumni',
        'institusi_pekerjaan',
        'jenis_pekerjaan',
    ];
}
