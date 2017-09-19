<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class reqEvaluasi extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'nama_pengguna' => 'required',
            'telp_penggguna' => 'required',
            'nama_instansi' => 'required',
            'alamat_instansi' => 'required',
            'jabatan' => 'required',
            'nama' => 'required',
            'nim' => 'required',
            'posisi' => 'required',
            'telp' => 'required',
            'jurusan' => 'required',
            'devisi' => 'required',
            'masa_kerja' => 'required|date_format:"Y-m-d"',
            'integritas' => 'required' ,
            'keahlian' => 'required',
            'kemampuan' => 'required',
            'ti' => 'required' ,
            'komunikasi' => 'required',
            'tim' => 'required' ,
            'pengembangan' => 'required',
            'saran' => 'required',
            'tanggal_daftar'=> 'required|date_format:"Y-m-d"'     
             ];
    }

    public function messages(){
        return [
'nama_pengguna.required' => 'Nama Pengguna tidak boleh kosong',
'telp_penggguna.required' => 'Telephone tidak boleh kosong',
'nama_instansi.required' => 'instansi tidak boleh kosong',
'masa_kerja.required' => 'Masa kerja tidak boleh kosong',
'masa_kerja.date_format' => 'Format harus berupa (0000-00-00)',
'alamat_instansi.required' => 'Alamat tidak boleh kosong',
'nama.required' => 'Nama tidak boleh kosong',
'nim.required' => 'Nim tidak boleh kosong',
'posisi.required' => 'Posisi tidak boleh kosong',
'telp.required' => 'Telp tidak boleh kosong',
'jurusan.required' => 'Jurusan tidak boleh kosong',
'devisi.required' => 'Devisi tidak boleh kosong',
'integritas.required' => 'Integritas tidak boleh kosong',
'keahlian.required' => 'Keahlian tidak boleh kosong',
'kemampuan.required' => 'Kemampuan tidak boleh kosong',
'ti.required' => 'TI tidak boleh kosong',
'komunikasi.required' => 'Komunikasi tidak boleh kosong',
'tim.required' => 'Tim tidak boleh kosong',
'pengembangan.required' => 'Pengembangan tidak boleh kosong',
'saran.required' => 'Saran tidak boleh kosong',
'tanggal_daftar.required' => 'Tanggal daftar tidak boleh kosong',
'tanggal_daftar.date_format' => 'Format harus berupa (0000-00-00)',
        ];
    }
}
