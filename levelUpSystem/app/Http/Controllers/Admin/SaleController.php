<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SaleService;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function __construct(
        protected SaleService $service
    )
    {

    }

    public function index(){}
    public function show(){}
    public function create(){}
    public function store(){}
    public function edit(){}
    public function update(){}
    public function destroy(){}
}
