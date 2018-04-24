<?php

namespace App\Http\Controllers\API;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller
{
    public function store(Request $request)
    {
        $create = Review::create($request->all());

        return $this->respondWithSuccess([], "Review eshte shtuar me sukses!");
    }
}
