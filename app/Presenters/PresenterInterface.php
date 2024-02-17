<?php

namespace App\Presenters;

use Illuminate\Support\Collection;

interface PresenterInterface
{
    public function items(): Collection;
    public function total(): int;
}