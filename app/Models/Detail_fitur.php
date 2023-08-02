<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_fitur extends Model
{
    use HasFactory;

    protected $table = 'detail_fitur';
    protected $fillable = [
        'id_pesan',
        'id_fitur',
    ];

    public function nama(){
        return $this->belongsTo(Fitur::class, 'id');
    }
}
