<?php

namespace App\Http\Requests\Auth\Register;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'NAMA_USER' => ['required'],
            'USERNAME' => ['required'],
            'PASSWORD' => ['required'],
            'EMAIL' => ['required'],
            'NO_HP' => ['required'],
            'WA' => ['required'],
            'PIN' => ['required'],
            'confirm_password' => 'required|same:PASSWORD',
        ];
    }
}
