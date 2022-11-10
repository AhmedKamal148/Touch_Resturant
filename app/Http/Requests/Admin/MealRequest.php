<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MealRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    protected function onCreate(): array
    {
        return [
            'name' => 'required|min:4|unique:meals,name',
            'image' => 'required|image|unique:meals,image',
            'meal_time' => 'required|min:5',
        ];
    }

    protected function onUpdate(): array
    {
        return [
            'name' => 'min:4|unique:meals,name,' . $this->meal->id,
            'image' => 'image|unique:meals,image,' . $this->meal->id,
            'meal_time' => 'required|min:5',
        ];
    }

    public function rules(): array
    {
        return request()->isMethod('PUT') || request()->isMethod('PATCH') ? $this->onUpdate() : $this->onCreate();

    }
}
