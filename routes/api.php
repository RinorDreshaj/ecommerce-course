<?php

use Illuminate\Http\Request;
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products', 'API\ProductsController@index');
Route::get('products/{id}', 'API\ProductsController@show');
Route::get('teams', 'API\TeamsController@index');
Route::post('reviews', 'API\ReviewsController@store');