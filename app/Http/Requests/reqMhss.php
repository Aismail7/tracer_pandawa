<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class reqMhss extends FormRequest
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
        
            'angkatan' => 'required|date_format:"Y"',
            'nama_mahasiswa' => 'required',
            'alamat' => 'required',
            'password' => 'required'       
             ];
    }

    public function messages(){
        return [
            
            'angkatan.required' => 'Angkatan harus diisi',
            'angkatan.date_format' => 'Format angkatan harus berupa tahun',
            'nama_mahasiswa.required' => 'Nama mahasiswa harus diisi',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong'

        ];
    }
}
