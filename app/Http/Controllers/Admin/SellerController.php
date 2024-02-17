<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSellerRequest;
use App\Services\SellerService;
use App\DTO\CreateSellerDTO;
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
        $sellers = $this->service->getAll()->items();
        return view('admin/seller/index', compact('sellers'));
    }

    public function show(string|int $id)
    {
        $seller = $this->service->getOne($id)->item();
        if (!$seller) {
            return redirect()->route('seller.index');
        }
        return view('admin/seller/show', compact('seller'));
    }

    public function create()
    {
        return view('admin/seller/create');
    }

    public function store(StoreUpdateSellerRequest $request)
    {
        $this->service->store(CreateSellerDTO::make($request));
        return redirect()->route('seller.index');
    }

    public function edit(string|int $id)
    {
        $seller = $this->service->getOne($id)->item();
        if (!$seller) {
            return redirect()->route('seller.index');
        }
        return view('admin/seller/edit', compact('seller'));
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
