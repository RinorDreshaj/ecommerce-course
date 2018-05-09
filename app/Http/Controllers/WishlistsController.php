<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class WishlistsController extends Controller
{
    public function index()
    {
        $products = Auth::user()->wishlist()->get();

        return view('wishlists.index', compact('products'));
    }

    public function store(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);

        $user->wishlist()->attach([$request->product_id]);

        return response()->json(["data" => "success"]);
    }

    public function destroy($product_id)
    {
        Auth::user()->wishlist()->detach([$product_id]);

        return redirect()->back();
    }
}
