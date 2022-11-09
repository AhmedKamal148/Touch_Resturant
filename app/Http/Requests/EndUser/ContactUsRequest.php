<?php

namespace App\Http\Requests\EndUser;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'    => ['required', 'string', 'min:3', 'max:255'],
            'email'   => ['required', 'string', 'email', 'max:255'],
            'message' => ['required', 'string'],
        ];
    }
}
