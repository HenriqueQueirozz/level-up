<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\Sale;
use App\Presenters\SalePresenter;
use App\DTO\CreateSaleDTO;
use App\DTO\FilterSaleDTO;

class SaleService
{
    public function __construct(
        protected Sale $sale
    )
    {   
    }

    public function getAll(FilterSaleDTO $filter): SalePresenter
    {
        $filter = $filter->toArray();
        $sales = $this->sale
                        ->where(function ($query) use ($filter) {
                            if (isset($filter['seller_id']) && !empty($filter['seller_id'])) {
                                $query->where('seller_id', $filter['seller_id']);
                            }

                            if (isset($filter['startDate']) && !empty($filter['startDate'])) {
                                $query->where('date', '>=', $filter['startDate']);
                            }

                            if (isset($filter['endDate']) && !empty($filter['endDate'])) {
                                $query->where('date', '<=', $filter['endDate']);
                            }
                        })
                        ->orderBy('id')
                        ->get();
        return new SalePresenter($sales);
    }

    public function getOne(string|int $id): SalePresenter
    {
        if (!$oneSale = $this->sale::find($id)) {
            return null;
        }
        return new SalePresenter(collect([$oneSale]));
    }

    public function store(CreateSaleDTO $data): void
    {
        $this->sale::create($data->toArray());   
    }

    public function update(CreateSaleDTO $data, string|int $id): Sale|null
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