<?php

Auth::routes();
Route::get('/', 'MainController@index');
Route::get('/products', 'ProductsController@index');
Route::get('/products/{product}', 'ProductsController@show');


Route::group(["middleware" => ["auth"]], function() {
    Route::get('payment', 'PaymentController@index');
    Route::post('payment', 'PaymentController@store');
    Route::get('wishlists', 'WishlistsController@index');
    Route::post('wishlists', 'WishlistsController@store');
    Route::delete('wishlists/{product}', 'WishlistsController@destroy');
    Route::delete('wishlists', 'WishlistsController@delete');
    Route::resource('cart', 'CartsController');
    Route::post('cart-add', 'CartsController@addQuantity');
    Route::post('cart-sub', 'CartsController@subQuantity');
});


Route::group(["middleware" => ["admin"], "prefix" => "admin"], function() {
    Route::get('/', 'Admin\DashboardController@index');
    Route::resource('products', 'Admin\ProductsController');
    Route::resource('products/{product}/items', 'Admin\ProductItemsController');
    Route::resource('sliders', 'Admin\SlidersController');
    Route::resource('categories', 'Admin\CategoriesController');
    Route::resource('orders', 'Admin\OrdersController');
});

// admin/products/1/items/ -> get - index
// admin/products/1/items/ -> post - store
// admin/products/1/items/1 -> get- show
// admin/products/1/items/1 -> delete - destroy
// admin/products/1/items/1 -> put - update
// admin/products/1/items/1/create -> get - update
// admin/products/1/items/1/edit -> get - edit view
