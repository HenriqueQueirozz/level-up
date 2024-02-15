<?php

namespace App\Services;

use App\Models\Sale;

class SaleService
{
    public function __construct(
        protected Sale $seller
    )
    {
        
    }
}