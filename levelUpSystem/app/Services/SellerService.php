<?php

namespace App\Services;

use App\Models\Seller;

class SellerService
{
    public function __construct(
        protected Seller $seller
    )
    {
    }

    public function getAll()
    {
        return $this->seller::All(); 
    }

    public function getOne(string|int $id): Seller|null
    {
        if (!$oneSeller = $this->seller::find($id)) {
            return null;
        }
        return $oneSeller;
    }

    public function store(array $data): void
    {
        $this->seller::create($data);
    }

    public function update(array $data, string|int $id)
    {
        if (!$updateSeller = $this->seller::find($id)) {
            return null;
        }
        $updateSeller->update($data);
        return $updateSeller;
    }

    public function destroy(string|int $id): void
    {
        $this->seller->destroy($id);
    }
}