<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mempelai_wanita extends Model
{
    use HasFactory;

    protected $table = 'mempelai_wanita';
    protected $fillable = [
        'id_pesan',
        'nama_wanita',
        'anak_ke',
        'nama_ayah',
        'nama_ibu',
        'username_ig'
    ];
}
