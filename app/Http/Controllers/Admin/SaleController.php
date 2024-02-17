<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSaleRequest;
use App\Services\SaleService;
use App\DTO\CreateSaleDTO;
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
        $sales = $this->service->getAll()->items();
        return view('admin/sale/index', compact('sales'));
    }

    public function show(string|int $id)
    {
        $sale = $this->service->getOne($id)->item();
        if (!$sale) {
            return redirect()->route('sale.index');
        }
        return view('admin/sale/show', compact('sale'));
    }

    public function create()
    {
        return view('admin/sale/create');
    }

    public function store(StoreUpdateSaleRequest $request)
    {
        $this->service->store(CreateSaleDTO::make($request));
        return redirect()->route('sale.index');
    }

    public function edit(string|int $id)
    {
        $sale = $this->service->getOne($id)->item();
        if (!$sale) {
            return redirect()->route('sale.index');
        }
        return view('admin/sale/edit', compact('sale'));
    }

    public function update(StoreUpdateSaleRequest $request, string|int $id)
    {
        $validated = $request->validated();
        $sale = $this->service->update($validated, $id);
        if (!$sale) {
            return redirect()->back();
        }
        return redirect()->route('sale.index');
    }

    public function destroy(string|int $id)
    {
        $this->service->destroy($id);
        return redirect()->route('sale.index');
    }
}
