<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    use HasFactory;

    protected $table = 'pesan';
    protected $fillable = [
        'id',
        'id_template',
        'id_user',
    ];

    protected $with = ['template', 'user', 'fitur', 'mPria', 'mWanita', 'data'];

    public function template()
    {
        return $this->belongsTo(Template::class, 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function fitur()
    {
        return $this->hasMany(Detail_fitur::class, 'id_pesan');
    }
    public function mPria()
    {
        return $this->hasOne(Mempelai_pria::class, 'id_pesan');
    }
    public function mWanita()
    {
        return $this->hasOne(Mempelai_wanita::class, 'id_pesan');
    }
    public function data()
    {
        return $this->hasOne(Data::class, 'id_pesan');
    }
}
