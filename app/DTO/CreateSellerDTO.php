<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateSellerRequest;

class CreateSellerDTO
{
    private $data;

    public function __construct(
        public string $name,
        public string $email
    )
    {
        $this->data = [
            'name' => $name,
            'email' => $email
        ];
    }

    public static function make(StoreUpdateSellerRequest $request): self
    {
        $validated = $request->validated();
        return new self(
            $validated['name'],
            $validated['email']
        );
    }

    public function toArray(): array
    {
        return $this->data;
    }
}