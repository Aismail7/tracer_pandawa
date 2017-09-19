<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Loker extends Model
{
    //
    // use SoftDeletes;
    protected $table = 'tbl_loker';
    // protected $dates = ['deleted_at'];
    protected $fillable = ['id','perusahaan','pekerjaan','isi'];


    // public function dosen(){
    // 	return $this->belongsTo('App\Models\Dosen','dosen_id','id');
    // }

    // public function krs(){
    // 	return $this->hasMany('App\Models\Krs','mahasiswa_id','id');
    // }

}
