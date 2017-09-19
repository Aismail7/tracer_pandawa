<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class reqTracer extends FormRequest
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
            'nama_kantor' => 'required',
            'web_kantor' => 'required',
            'posisi' => 'required',
            'mulai_kerja' => 'required|date_format:"Y-m-d"',
            'pekerjaan' => 'required',
            'sumber' => 'required',
            'gaji' => 'required',
            'lama' => 'required',
            'berkaitan' => 'required',
            'alamat' => 'required',
            'bidang_usaha' => 'required',
            'jumkar' => 'required',
            'omact' => 'required',
            'pengeluaran' => 'required' ,
            'kegiatan' => 'required',
            'usulan' => 'required',
            'keilmuan' => 'required'      
             ];
    }

    public function messages(){
        return [
'nama_kantor.required' => 'Nama kantor tidak boleh kosong',
'web_kantor.required' => 'Web kantor tidak boleh kosong',
'posisi.required' => 'Posisi tidak boleh kosong',
'mulai_kerja.required' => 'Mulai kerja tidak boleh kosong',
'mulai_kerja.date_format' => 'Format harus berupa (0000-00-00)',
'pekerjaan.required' => 'Pekerjaan tidak boleh kosong',
'sumber.required' => 'Sumber tidak boleh kosong',
'gaji.required' => 'Gaji tidak boleh kosong',
'lama.required' => 'Lama kerja tidak boleh kosong',
'berkaitan.required' => 'Berkaitan tidak boleh kosong',
'alamat.required' => 'Alamat tidak boleh kosong',
'bidang_usaha.required' => 'BIdang usaha tidak boleh kosong',
'jumkar.required' => 'Jumlah karyawan tidak boleh kosong',
'omact.required' => 'Omact tidak boleh kosong',
'pengeluaran.required' => 'Pengeluaran tidak boleh kosong',
'kegiatan.required' => 'Kegiatan tidak boleh kosong',
'usulan.required' => 'Usulan tidak boleh kosong',
'keilmuan.required' => 'Keilmuan tidak boleh kosong'
        ];
    }
}
