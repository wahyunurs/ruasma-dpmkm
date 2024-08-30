<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nim' => 'required|string|size:20|unique:mahasiswas',
            'fakultas' => 'required|string|max:50',
            'nama' => 'required|string|max:100',
        ];
    }
}
