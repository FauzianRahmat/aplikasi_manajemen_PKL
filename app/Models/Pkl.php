<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\siswa;
use App\Models\jurusan;
use App\Models\Perusahaan;

class Pkl extends Model
{
    use HasFactory;
    protected $table ='pkls';
    protected $fillable =[
        'siswa_id',
        'kelas',
        'perusahaan_id',
        'tanggal_masuk',
        'jurusan_id',
];

public function siswa()
{
    return $this->hasOne(siswa::class, 'id', 'siswa_id');
}

public function jurusan()
{
    return $this->hasOne(jurusan::class, 'id', 'jurusan_id');
}

public function perusahaan()
{
    return $this->hasOne(Perusahaan::class, 'id', 'perusahaan_id');
}

}
