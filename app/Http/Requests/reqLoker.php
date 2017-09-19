<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class reqLoker extends FormRequest
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

            'pekerjaan' => 'required',
            'perusahaan' => 'required',
            'isi' => 'required'
             ];
    }

    public function messages(){
        return [
            'perusahaan.required' => 'Perusahaan harus diisi',
            'pekerjaan.required' => 'Pekerjaan harus diisi',
            'isi.required' => 'Tidak boleh kosong'
        ];
    }
}
