<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_address'   => ['required', 'string', 'max:255'],
            'second_address'  => ['required', 'string', 'max:255'],
            'opening_hours_1' => ['required', 'string', 'max:255'],
            'opening_hours_2' => ['required', 'string', 'max:255'],
            'contact_phone'   => ['required', 'string', 'max:255'],
            'contact_email'   => ['required', 'string', 'max:255'],
        ];
    }
}
