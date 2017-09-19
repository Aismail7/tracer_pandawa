<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Evaluasi extends Model
{
	
 use SoftDeletes;
    protected $table = 'tbl_evaluasi';
    protected $dates = ['deleted_at'];
    protected $fillable = [

     	'id', 'nama_pengguna','telp_penggguna', 'nama_instansi', 'alamat_instansi', 'jabatan', 
        'nama', 'nim', 'posisi', 'telp', 'jurusan', 'devisi', 'masa_kerja', 'integritas', 'keahlian',
        'kemampuan', 'ti', 'komunikasi', 'tim', 'pengembangan', 'saran', 'tanggal_daftar'
    ];

}
