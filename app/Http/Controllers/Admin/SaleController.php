<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSaleRequest;
use App\Http\Requests\FilterSaleRequest;
use App\Services\SaleService;
use App\Services\SellerService;
use App\DTO\CreateSaleDTO;
use App\DTO\FilterSaleDTO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SaleController extends Controller
{
    public function __construct(
        protected SaleService $saleService,
        protected SellerService $sellerService
    )
    {
    }

    public function index(FilterSaleRequest $request)
    {
        $sales = $this->saleService->getAll(FilterSaleDTO::make($request))->formatedItems();
        $sellers = $this->sellerService->getAll()->items();
        return view('admin/sale/index', compact('sales', 'sellers'));
    }

    public function show(string|int $id)
    {
        $sale = $this->saleService->getOne($id);
        if (!$sale) {
            return redirect()->route('sale.index');
        }
        $sale = $sale->formatedItem();
        return view('admin/sale/show', compact('sale'));
    }

    public function create()
    {
        $sellers = $this->sellerService->getAll();
        if ($sellers->total() == 0) {
            return redirect()->route('sale.index');
        }
        $sellers = $sellers->items();
        return view('admin/sale/create', compact('sellers'));
    }

    public function store(StoreUpdateSaleRequest $request)
    {
        $this->saleService->store(CreateSaleDTO::make($request));
        return redirect()->route('sale.index');
    }

    public function edit(string|int $id)
    {
        $sale = $this->saleService->getOne($id);
        $sellers = $this->sellerService->getAll();
        if (!$sale) {
            return redirect()->route('sale.index');
        }
        if ($sellers->total() == 0) {
            return redirect()->route('sale.index');
        }
        $sale = $sale->item();
        $sellers = $sellers->items();
        return view('admin/sale/edit', compact('sale', 'sellers'));
    }

    public function update(StoreUpdateSaleRequest $request, string|int $id)
    {
        $sale = $this->saleService->update(CreateSaleDTO::make($request), $id);
        if (!$sale) {
            return redirect()->back();
        }
        return redirect()->route('sale.index');
    }

    public function destroy(string|int $id)
    {
        $this->saleService->destroy($id);
        return redirect()->route('sale.index');
    }
}
