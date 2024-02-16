<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateSellerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'name' => [
                'required'
            ],
            'email' => [
                'required', 
                Rule::unique('sellers')
            ]
        ];

        if ($this->method() === 'PUT') {
            $rules['email'] = [
                'required',
                Rule::unique('sellers')->ignore($this->id)
            ];
        }
        

        return $rules;
    }

    public function messages(): array
    {
        return [
            "name.required" => "O campo nome é obrigatório.",
            "email.required" => "O campo e-mail é obrigatório.",
            "email.unique" => "E-mail indisponível, por favor informe outro.",
        ];
    }
}
