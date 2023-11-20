<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusans';
    protected $fillable = [
        'id',
        'kepala_jurusan',
        'nama_jurusan',
    ];
    public function peminjaman()
    {
        return $this->hasMany('App\Models\jurusan', 'id', 'jurusan_id');
    }
}
