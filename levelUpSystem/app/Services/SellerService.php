<?php

namespace App\Services;

use App\Models\Seller;

class SellerService
{
    public function __construct(
        protected Seller $seller
    )
    {
        
    }
}