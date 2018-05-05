<?php

Auth::routes();
Route::get('/', 'MainController@index');
Route::get('/products', 'ProductsController@index');

Route::group(["middleware" => ["admin"], "prefix" => "admin"], function() {
    Route::get('/', 'Admin\DashboardController@index');
    Route::resource('products', 'Admin\ProductsController');
    Route::resource('products/{product}/items', 'Admin\ProductItemsController');
    Route::resource('sliders', 'Admin\SlidersController');
    Route::resource('categories', 'Admin\CategoriesController');
});

// admin/products/1/items/ -> get - index
// admin/products/1/items/ -> post - store
// admin/products/1/items/1 -> get- show
// admin/products/1/items/1 -> delete - destroy
// admin/products/1/items/1 -> put - update
// admin/products/1/items/1/create -> get - update
// admin/products/1/items/1/edit -> get - edit view
