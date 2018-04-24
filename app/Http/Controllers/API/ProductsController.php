<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->with('items')->paginate(20);

        return $this->respondWithSuccess($products);
    }

    public function show($id)
    {
        $product = Product::where('id',$id)->with('items','reviews')->first();

        return $this->respondWithSuccess($product);
    }
}
