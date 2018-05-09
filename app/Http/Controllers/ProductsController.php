<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $products = Product::where('id', '>',0);

        if(isset($request->name))
        {
            $products = $products->where('name', 'like', "%{$request->name}%");
        }

        if(isset($request->price_range))
        {
            $products = $products->whereBetween('price', explode('-', $request->price_range));
        }

        if(isset($request->sorting))
        {
            $products = $products->orderBy('price', $request->sorting);
        }

        $products = $products->paginate(20);

        return view('products.index', compact('categories', 'products'));
    }

    public function show(Product $product)
    {
        $related_products = Product::where(
            'category_id', $product->category_id
        )->limit(20)
            ->get();

        return view('products.show', [
            "product" => $product,
            "related_products" => $related_products
        ]);
    }
}
