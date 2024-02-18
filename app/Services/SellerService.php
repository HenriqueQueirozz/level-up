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

    public function getAll(): SellerPresenter
    {
        return new SellerPresenter($this->seller::All()); 
    }

    public function getOne(string|int $id): SellerPresenter|null
    {
        if (!$oneSeller = $this->seller::find($id)) {
            return null;
        }
        return new SellerPresenter(collect([$oneSeller]));
    }

    public function store(CreateSellerDTO $data): void
    {
        $this->seller::create($data->toArray());
    }

    public function update(CreateSellerDTO $data, string|int $id): Seller|null
    {
        if (!$updateSeller = $this->seller::find($id)) {
            return null;
        }
        $updateSeller->update($data->toArray());
        return $updateSeller;
    }

    public function destroy(string|int $id): void
    {
        $this->seller->destroy($id);
    }
}