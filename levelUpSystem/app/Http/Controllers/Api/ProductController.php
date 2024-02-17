<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateProductRequest;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(
        protected ProductService $service
    )
    {
    }

    public function index()
    {
    
    }

    public function store(StoreUpdateProductRequest $request)
    {
    
    }

    public function show(string $id)
    {
    
    }

    public function update(StoreUpdateProductRequest $request, string $id)
    {
    
    }

    public function destroy(string $id)
    {
    
    }
}
