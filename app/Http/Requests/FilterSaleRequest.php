<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilterSaleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'seller_id' => ['numeric'],
            'startDate' => ['date'],
            'endDate' => ['date'],
        ];

        return $rules;
    }

    public function messages(): array
    {
        return [
            "seller_id.numeric" => "O código do vendedor solicitado é inválido.",
            "startDate.date" => "A data inicial é inválida.",
            "endDate.date" => "A data final é inválida.",
        ];
    }
}
