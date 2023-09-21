<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'paket';

    protected $fillable = [
        'nama',
        'harga',
    ];

    public function detailPaketTemplate()
    {
        return $this->hasMany(Detail_paket_template::class, 'paket_id');
    }

    public function detailPaketFitur()
    {
        return $this->hasMany(Detail_paket_fitur::class, 'paket_id');
    }
}
