<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        dd('store product');
    }
}
