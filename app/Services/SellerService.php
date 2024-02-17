<?php

namespace App\Services;

use App\Models\Seller;
use App\Presenters\SellerPresenter;
use App\DTO\CreateSellerDTO;

class SellerService
{
    public function __construct(
        protected Seller $seller
    )
    {
    }

    public function getAll()
    {
        return new SellerPresenter($this->seller::All()); 
    }

    public function getOne(string|int $id)
    {
        if (!$oneSeller = $this->seller::find($id)) {
            return null;
        }
        return new SellerPresenter(collect([$oneSeller]));
    }

    public function store(CreateSellerDTO $data): void
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