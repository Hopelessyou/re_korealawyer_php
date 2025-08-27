<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaseStoreRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() && auth()->user()->lawyerProfile;
    }
    
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:200',
            'summary' => 'required|min:10|max:500',
            'body' => 'nullable|min:20'
        ];
    }
}
