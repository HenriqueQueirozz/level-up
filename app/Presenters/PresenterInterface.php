<?php

namespace App\Presenters;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface PresenterInterface
{
    public function items(): Collection;
    public function item(): Model;
    public function total(): int;
}