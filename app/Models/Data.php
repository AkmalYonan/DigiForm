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
        'lokasi_acara',
        'tgl_resepsi',
        'tgl_akad',
        'jam_acara',
        'email',
        'no_wa',
        'nama_panggilan',
    ];
}
