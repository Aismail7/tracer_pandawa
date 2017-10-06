<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Tracer extends Model
{
    
 use SoftDeletes;
    protected $table = 'tbl_tracer';
    protected $dates = ['deleted_at'];
    protected $fillable = [
                            'id', 'nama_kantor', 'web_kantor', 'posisi', 
                            'mulai_kerja', 'pekerjaan', 'sumber', 'gaji', 
                            'lama', 'berkaitan', 'alamat', 'bidang_usaha', 
                            'jumkar', 'omact', 'pengeluaran', 'kegiatan',
                            'usulan', 'keilmuan'


    ];

}
