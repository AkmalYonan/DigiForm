<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data';
    protected $fillable = [
        'id_pesan',
        'salam_pembuka',
        'lokasi_akad',
        'lokasi_resepsi',
        'tgl_resepsi',
        'tgl_akad',
        'jam_akad',
        'jam_resepsi',
        'email',
        'no_wa',
        'nama_panggilan',
        'nama_pasangan',
        'iframeMaps_akad',
        'iframeMaps_resepsi',
    ];
}
