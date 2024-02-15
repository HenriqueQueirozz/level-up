<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SellerService;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function __construct(
        protected SellerService $service
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
