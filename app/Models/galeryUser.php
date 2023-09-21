<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeryUser extends Model
{
    use HasFactory;

    protected $table = 'galery_users';

    protected $guarded = ['id'];
    protected $with = ['pesan_id'];

    public function pesan_id()
    {
        return $this->belongsTo(pesan::class, 'id_pesan');
    }
}
