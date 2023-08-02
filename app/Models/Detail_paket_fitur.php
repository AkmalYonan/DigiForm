<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_paket_fitur extends Model
{
    use HasFactory;

    protected $table = 'detail_paket_fitur';
    protected $fillable = [
        'id',
        'paket_id',
        'fitur_id'
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id', 'id');
    }

    public function fitur()
    {
        return $this->belongsTo(fitur::class, 'fitur_id', 'id');
    }
}
