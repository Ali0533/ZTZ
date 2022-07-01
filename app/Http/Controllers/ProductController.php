<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create() {
        return view('admin.create');
    }

    public function createPost(ProductRequest $request) {
        Product::create($request->all());

        return back()->with('success', true);
    }

    public function edit(Request $request, Product $product) {
        $request->session()->flashInput($product->toArray());
        return view('create', compact('product'));
    }

    public function destroy(Product $product) {
        $product->delete();
        return back();
    }
}
