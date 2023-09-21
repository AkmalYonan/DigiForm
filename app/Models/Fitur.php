<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitur extends Model
{
    use HasFactory;

    protected $table = 'fitur';

    protected $fillable = [
        'nama',
    ];

    public function pakets()
    {
        return $this->belongsToMany(Paket::class, 'detail_paket_fitur', 'fitur_id', 'paket_id');
    }
}
