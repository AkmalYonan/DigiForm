<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $table = 'template';
    protected $fillable = [
        'id',
        'nama',
    ];

    public function pakets()
    {
        return $this->belongsToMany(Paket::class, 'detail_paket_template', 'template_id', 'paket_id');
    }
}
