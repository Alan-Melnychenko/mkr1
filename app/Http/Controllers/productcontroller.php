<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Manufacturer;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $manufacturers = Manufacturer::all();

        return view('products.index', compact('products', 'manufacturers'));
    }

    public function filterByManufacturer(Request $request)
    {
        $manufacturer_id = $request->input('manufacturer_id');
        $manufacturer = Manufacturer::find($manufacturer_id);
        $products = $manufacturer->products;

        return view('products.index', compact('products', 'manufacturer'));
    }
}
