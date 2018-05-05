<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', 1)->get();

        $featured_products = Product::where("is_featured", 1)->get();

        $categories = Category::all();

        return view('index.index', compact('featured_products', 'sliders', 'categories'));
    }
}
