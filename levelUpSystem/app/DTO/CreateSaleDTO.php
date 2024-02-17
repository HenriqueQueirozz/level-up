<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateSaleRequest;

class CreateSaleDTO
{
    public function __construct(
        public string|int $seller_id,
        public string|int $value,
        public string $date
    )
    {
    }

    public static function make(StoreUpdateSaleRequest $request): self
    {
        $validated = $request->validated();
        return new self(
            $validated->seller_id,
            $validated->value,
            $validated->date
        );
    }
}
