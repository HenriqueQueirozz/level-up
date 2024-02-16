<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'name' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
            'price' => ['required'],
            'quantity' => ['required'],
        ];

        return $rules;
    }

    public function messages(): array
    {
        return [

        ];
    }
}
