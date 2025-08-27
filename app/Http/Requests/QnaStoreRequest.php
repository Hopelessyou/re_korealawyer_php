<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QnaStoreRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check();
    }
    
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:120',
            'body' => 'required|min:20'
        ];
    }
}
