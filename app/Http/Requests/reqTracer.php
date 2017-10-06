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
            'web_kantor' => 'required'     
             ];
    }

    public function messages(){
        return [
'nama_kantor.required' => 'Nama kantor tidak boleh kosong',
'web_kantor.required' => 'Web kantor tidak boleh kosong'
        ];
    }
}
