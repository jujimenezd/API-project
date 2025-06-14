<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return response()->json($product, 201);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json($product, 204);
    }
}