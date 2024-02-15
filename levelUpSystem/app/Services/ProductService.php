<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function __construct(
        protected Product $seller
    )
    {
        
    }
}