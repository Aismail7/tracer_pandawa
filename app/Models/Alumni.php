<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Alumni extends Model
{
    //
    // use SoftDeletes;
    protected $table = 'tbl_mahasiswa';
    // protected $dates = ['deleted_at'];
    protected $fillable = ['id', 'nim', 'nama_mahasiswa', 'angkatan', 'jurusan', 
                        'kelas_program', 'dosen_id', 'alamat', 'lulus',
                        'bulan', 'tahun', 'tempat_lahir', 'tanggal_lahir', 'jk', 'status',
                        'hp', 'hp1', 'hp2', 'noortu', 'fb', 'email', 'ipk', 'skripsi'];

}
