<?php

namespace App\Http\Requests\Admin\Chef;

use App\Models\Chef;
use Illuminate\Foundation\Http\FormRequest;

class UpdateChefRequest extends FormRequest
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
    public function rules()
    {
        return [
            'id' => 'required|exists:chefs'
        ];
    }
}
