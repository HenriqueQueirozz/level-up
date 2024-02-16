<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateProductRequest;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function __construct(
        protected ProductService $service
    )
    {
    }

    public function index()
    {
        $products = $this->service->getAll();
        return view('admin/product/index', compact('products'));
    }

    public function show(string|int $id)
    {
        $product = $this->service->getOne($id);
        if (!$product) {
            return redirect()->route('product.index');
        }
        return view('admin/product/show', compact('product'));
    }

    public function create()
    {
        return view('admin/product/create');
    }

    public function store(StoreUpdateProductRequest $request)
    {
        $validated = $request->validated();
        $this->service->store($validated);
        return redirect()->route('product.index');
    }

    public function edit(string|int $id)
    {
        $product = $this->service->getOne($id);
        if (!$product) {
            return redirect()->route('product.index');
        }
        return view('admin/product/edit', compact('product'));
    }

    public function update(StoreUpdateProductRequest $request, string|int $id)
    {
        $validated = $request->validated();
        $product = $this->service->update($validated, $id);
        if (!$product) {
            return redirect()->back();
        }
        return redirect()->route('product.index');
    }

    public function destroy(string|int $id)
    {
        $this->service->destroy($id);
        return redirect()->route('product.index');
    }
}
