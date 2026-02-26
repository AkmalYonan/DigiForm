<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryUser extends Model
{
    use HasFactory;

    protected $table = 'galleryUsers';

    protected $fillable = [
        'id_pesan',
        'namaFile'
    ];

    public function pesan_id()
    {
        return $this->belongsTo(Pesan::class, "id_pesan");
    }
}
