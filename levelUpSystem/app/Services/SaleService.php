<?php

namespace App\Services;

use App\Models\Sale;

class SaleService
{
    private $comissionPercentage = 0.085;

    public function __construct(
        protected Sale $sale
    )
    {   
    }

    public function getAll()
    {
        $sales = $this->sale::all();
        foreach ($sales as $sale) {
            $sale->commission = $this->calcComission($sale);
        }
        return $sales;
    }

    public function getOne(string|int $id): Sale|null
    {
        if (!$oneSale = $this->sale::find($id)) {
            return null;
        }
        $oneSale->commission = $this->calcComission($oneSale);
        return $oneSale;
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

    public function calcComission(Sale $sale){
        return $sale->value * $this->comissionPercentage;
    }
}