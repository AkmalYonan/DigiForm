<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mempelai_pria extends Model
{
    use HasFactory;

    protected $table = 'mempelai_pria';
    protected $fillable = [
        'id_pesan',
        'nama_pria',
        'anak_ke',
        'nama_ayah',
        'nama_ibu',
        'username_ig'
    ];
}
