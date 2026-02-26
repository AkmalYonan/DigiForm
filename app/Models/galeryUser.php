<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeryUser extends Model
{
    use HasFactory;

    protected $table = 'galery_users';

    // Beritahu Laravel bahwa tabel ini tidak pakai kolom 'id' sebagai primary key
    // Kita arahkan ke 'id_pesan'
    protected $primaryKey = 'id_pesan';

    // Jika id_pesan bukan auto-incrementing integer, tambahkan ini:
    public $incrementing = false;

    protected $guarded = []; // Kosongkan jika tidak ada kolom id

    // Eager load relasi (Pastikan nama fungsi relasi benar)
    protected $with = ['pesan'];

    public function pesan()
    {
        return $this->belongsTo(Pesan::class, 'id_pesan', 'id');
    }
}
