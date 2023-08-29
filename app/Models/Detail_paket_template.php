<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_paket_template extends Model
{
    use HasFactory;

    protected $table = 'detail_paket_template';
    protected $fillable = [
        'id',
        'paket_id',
        'template_id'
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id', 'id');
    }

    public function template()
    {
        return $this->belongsTo(Template::class, 'template_id', 'id');
    }
}
