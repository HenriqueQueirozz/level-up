<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSaleRequest;
use App\Services\SaleService;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function __construct(
        protected SaleService $service
    )
    {
    }

    public function index()
    {
    
    }

    public function store(StoreUpdateSaleRequest $request)
    {
    
    }

    public function show(string $id)
    {
    
    }

    public function update(StoreUpdateSaleRequest $request, string $id)
    {
    
    }

    public function destroy(string $id)
    {
    
    }
}
