<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(50);

        return view('admin.products.index', compact('products'));
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        if($request->hasFile('image'))
        {
            $img_name = $this->uploadImage($request->image);
        }

        $product = Product::create(
            array_merge(
                $request->except('image', '_token'),
                ["image" => $img_name ?? null]
            )
        );

        return redirect('admin/products');
    }

    public function update(Request $request, Product $product)
    {
        if($request->hasFile('image'))
        {
            $img_name = $this->uploadImage($request->image);
        }

        $product->update(
            array_merge(
                $request->except('image', '_token', '_method'),
                ["image" => $img_name ?? $product->image ?? null]
            )
        );

        return redirect('admin/products/' . $product->id . '/edit');
    }

    public function destroy($id)
    {
        $product = Product::where('id', $id)->delete();

        return redirect('admin/products');
    }
}
