<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSellerRequest;
use App\Services\SellerService;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function __construct(
        protected SellerService $service
    )
    {
    }
    
    public function index()
    {
    
    }

    public function store(StoreUpdateSellerRequest $request)
    {
    
    }

    public function show(string $id)
    {
    
    }

    public function update(StoreUpdateSellerRequest $request, string $id)
    {
    
    }

    public function destroy(string $id)
    {
    
    }
}
