<?php

namespace App\Http\Controllers\Admin;

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
        $sellers = $this->service->getAll();
        return view('seller/index', compact('sellers'));
    }

    public function show(string|int $id)
    {
        $seller = $this->service->getOne($id);
        if (!$seller) {
            return redirect()->route('seller.index');
        }
        return view('seller/show', compact('seller'));
    }

    public function create()
    {
        return view('seller/create');
    }

    public function store(StoreUpdateSellerRequest $request)
    {
        $validated = $request->validated();
        $this->service->store($validated);
        return redirect()->route('seller.index');
    }

    public function edit(string|int $id)
    {
        $seller = $this->service->getOne($id);
        if (!$seller) {
            return redirect()->route('seller.index');
        }
        return view('seller/edit', compact('seller'));
    }

    public function update(StoreUpdateSellerRequest $request, string|int $id)
    {
        $validated = $request->validated();
        $seller = $this->service->update($validated, $id);
        if (!$seller) {
            return redirect()->back();
        }
        return redirect()->route('seller.index');
    }

    public function destroy(string|int $id)
    {
        $this->service->destroy($id);
        return redirect()->route('seller.index');  
    }
}
