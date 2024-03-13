<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use function Laravel\Prompts\progress;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json(['products' => $products], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return response()->json(['message' => 'Product created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully', 'product' => $product], 201);
    }
}
