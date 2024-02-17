<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateSellerRequest;

class CreateSellerDTO
{
    public function __construct(
        public string $name,
        public string $email
    )
    {
    }

    public static function make(StoreUpdateSellerRequest $request): self
    {
        $validated = $request->validated();
        return new self(
            $validated->name,
            $validated->email
        );
    }
}

