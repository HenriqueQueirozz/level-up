<?php

namespace App\DTO;

use App\Http\Requests\FilterSaleRequest;

class FilterSaleDTO
{
    private $data;

    public function __construct(
        public string|int $seller_id = '',
        public string $startDate = '',
        public string $endDate = ''
    )
    {
        $this->data = [
            'seller_id' => $seller_id,
            'startDate' => $startDate,
            'endDate' => $endDate,
        ];
    }

    public static function make(FilterSaleRequest $request): self
    {
        $validated = $request->validated();
        return new self(
            isset($validated['seller_id']) ? $validated['seller_id'] : '',
            isset($validated['startDate']) ? $validated['startDate'] : '',
            isset($validated['endDate']) ? $validated['endDate'] : ''
        );
    }

    public function toArray(): array
    {
        return $this->data;
    }
}
