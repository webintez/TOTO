<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = \App\Models\Product::where('is_active', true);

        if ($request->has('category')) {
            $category = \App\Models\ProductCategory::where('slug', $request->category)->first();
            if ($category) {
                $query->where('product_category_id', $category->id);
            }
        }

        $products = $query->paginate(9);
        $categories = \App\Models\ProductCategory::where('is_active', true)->get();

        return view('products.index', compact('products', 'categories'));
    }

    public function show($slug)
    {
        $product = \App\Models\Product::where('slug', $slug)
            ->where('is_active', true)
            ->with(['specifications', 'images'])
            ->firstOrFail();
            
        return view('products.show', compact('product'));
    }
}
