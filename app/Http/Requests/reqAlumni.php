<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class reqAlumni extends FormRequest
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
            //
            'nim' => 'required|unique:tbl_mahasiswa,nim,'.$request->input('mhs_id'),
            'angkatan' => 'required|date_format:"Y"',
            'nama_mahasiswa' => 'required',
            'alamat' => 'required',
            'lulus' => 'required',
            'bulan' => 'required',
            'tahun' => 'required|date_format:"Y"',
            'jk' => 'required',
            'status' => 'required',
            'hp' => 'required',
            'noortu' => 'required',
            'email' => 'required|email',
            'fb' => 'required',
            'ipk' => 'required',
            'skripsi' => 'required' ,
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date_format:"Y-m-d"'      
             ];
    }

    public function messages(){
        return [
            'nim.required' => 'NIM harus diisi',
            'nim.unique' => 'NIM sudah terdaftar',
            'angkatan.required' => 'Angkatan harus diisi',
            'angkatan.date_format' => 'Format angkatan harus berupa tahun',
            'nama_mahasiswa.required' => 'Nama mahasiswa harus diisi',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'lulus.required' => 'Tidak boleh kosong',
            'bulan.required' => 'Tidak boleh kosong',
            'tahun.required' => 'Tidak boleh kosong',
            'tahun.date_format' => 'Format harus berupa tahun (0000)',
            'jk.required' => 'Tidak boleh kosong',
            'status.required' => 'Tidak boleh kosong',
            'hp.required' => 'Tidak boleh kosong',
            'noortu.required' => 'Tidak boleh kosong',
            'email.required' => 'Email diperlukan',
            'email.email' => 'Email Salah',
            'fb.required' => 'Tidak boleh kosong',
            'ipk.required' => 'Tidak boleh kosong',
            'skripsi.required' => 'Tidak boleh kosong',
            'tempat_lahir.required' => 'Tidak boleh kosong',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi',
            'tanggal_lahir.date_format' => 'Format date'

        ];
    }
}
