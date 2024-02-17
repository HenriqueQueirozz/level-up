<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateSaleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'seller_id' => [
                'required', 
                'numeric'
            ],
            'value' => [
                'required',
                'numeric'
            ],
            'date' => [
                'required',
                'date'
            ],
        ];

        return $rules;
    }

    public function messages(): array
    {
        return [
            "seller_id.required" => "É necessário informar o vendedor responsável pela venda.",
            "value.required" => "O campo valor da venda é obrigatório.",
            "value.numeric" => "Valor da venda inválido.",
            "date.required" => "O campo data da venda é obrigatório.",
            "date.date" => "Data da venda inválido.",
        ];
    }
}
