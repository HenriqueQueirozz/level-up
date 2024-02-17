<?php

namespace App\Services;

use App\Models\Product;
use App\Presenters\ProductPresenter;

class ProductService
{
    public function __construct(
        protected Product $product
    )
    {
    }

    public function getAll()
    {
        return new ProductPresenter($this->product::all());
    }

    public function getOne(string|int $id)
    {
        if (!$oneProduct = $this->product::find($id)) {
            return null;
        }
        return new ProductPresenter(collect([$oneProduct]));
    }

    public function store(array $data)
    {
        $this->product::create($data);
    }

    public function update(array $data, string|int $id)
    {
        if (!$updateProduct = $this->product::find($id)) {
            return null;
        }
        $updateProduct->update($data);
        return $updateProduct;
    }

    public function destroy(string|int $id)
    {
        $this->product::destroy($id);
    }
}