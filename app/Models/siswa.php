<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = [
        'id',
        'email',
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'jurusan',
        'tlp',
        'alamat',

    ];
    public function peminjaman()
    {
        return $this->hasMany('App\Models\Siswa', 'id', 'siswa_id');
    }
}
