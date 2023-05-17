<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TindakanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'NIS' => 'required'
        ];
    }
}
