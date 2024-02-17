<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateProductRequest;

class CreateProductDTO
{
    public function __construct(
        public string $name,
        public string $description,
        public string $image,
        public string|int $price,
        public string|int $quantity
    )
    {
    }

    public static function make(StoreUpdateProductRequest $request): self
    {
        $validated = $request->validated();
        return new self(
            $validated->name,
            $validated->description,
            $validated->image,
            $validated->price,
            $validated->quantity
        );
    }
}

