<?php

namespace App\Presenters;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class SellerPresenter implements PresenterInterface
{
    public $items;

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

    private function resolveItems(): Collection
    {
        return $this->collection;
    }
}