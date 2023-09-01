<?php

namespace App\Http\Requests\Auth\Login;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
{

    public function rules()
    {
        return [
            'NAMA_USER' => ['required'],
            'USERNAME' => ['required'],
            'remember' => ['nullable']
        ];
    }
}
