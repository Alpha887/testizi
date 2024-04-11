<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

     public function new()
    {
        return view('product.new');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->priceHt = $request->input('priceHt');
        $product->creationDate = $request->input('creationDate');
        $product->save();

        return redirect()->route('product.index');
    }

        public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

        public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->priceHt = $request->input('priceHt');
        $product->dateUpdate = now();
        $product->save();

        return redirect()->route('product.index');
    }


}
