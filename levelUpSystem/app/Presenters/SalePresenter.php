<?php

namespace App\Presenters;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class SalePresenter implements PresenterInterface
{
    private $items;
    private $comissionPercentage = 0.085;

    public function __construct(
        protected Collection $collection
    )
    {
        $this->items = $this->resolveItems();
    }

    public function items(): Collection
    {
        return $this->items;
    }

    public function item(): Model
    {
        return $this->items[0];
    }


    public function total(): int
    {
        return count($this->collection);
    }

    public function calcComission($sale)
    {
        return $sale->value * $this->comissionPercentage;
    }

    private function resolveItems(): Collection
    {
        foreach ($this->collection as $item) {
            $item->commission = number_format($this->calcComission($item), 2, ',', '.');
            $item->value = number_format($item->value, 2, ',', '.');
            $item->date = date_format(date_create($item->date), "d/m/Y");
        }
        return $this->collection;
    }
}