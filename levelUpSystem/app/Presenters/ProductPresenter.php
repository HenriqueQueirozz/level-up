<?php

namespace App\Presenters;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class ProductPresenter implements PresenterInterface
{
    private $items;

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
        foreach ($this->collection as $item) {
        }
        return $this->collection;
    }
}