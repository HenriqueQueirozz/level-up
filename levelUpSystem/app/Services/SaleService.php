<?php

namespace App\Services;

use App\Models\Sale;
use App\Presenters\SalePresenter;

class SaleService
{
    public function __construct(
        protected Sale $sale
    )
    {   
    }

    public function getAll()
    {
        return new SalePresenter($this->sale::all());
    }

    public function getOne(string|int $id)
    {
        if (!$oneSale = $this->sale::find($id)) {
            return null;
        }
        return new SalePresenter(collect([$oneSale]));
    }

    public function store(array $data)
    {
        $this->sale::create($data);   
    }

    public function update(array $data, string|int $id)
    {
        if (!$updateSale = $this->sale::find($id)) {
            return null;
        }
        $updateSale->update($data);
        return $updateSale;
    }

    public function destroy(string|int $id): void
    {
        $this->sale->destroy($id);
    }
}