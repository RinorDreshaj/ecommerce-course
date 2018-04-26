<?php

Route::get('hello', function() {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'Admin\DashboardController@index');
Route::get('admin/products', 'Admin\ProductsController@index');
Route::post('admin/products', 'Admin\ProductsController@store');
Route::get('admin/products/{product}/edit', 'Admin\ProductsController@edit');
Route::put('admin/products/{product}', 'Admin\ProductsController@update');
Route::get('admin/products/create', 'Admin\ProductsController@create');
Route::delete('admin/products/{id}', 'Admin\ProductsController@destroy');
