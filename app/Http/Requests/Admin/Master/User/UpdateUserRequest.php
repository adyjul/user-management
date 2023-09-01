<?php

namespace App\Http\Requests\Admin\Master\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{

    public function rules()
    {
        return [
            'ID_USER' => ['required'],
            'NAMA_USER' => ['required'],
            'USERNAME' => ['required'],
            'PASSWORD' => ['required'],
            'EMAIL' => ['required'],
            'NO_HP' => ['required'],
            'WA' => ['required'],
            'PIN' => ['required'],
            'STATUS_USER' => ['required'],
        ];
    }
}
