@extends('layouts.app')

@section('content')
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-01.jpg);">
    <h2 class="l-text2 t-center">
        Cart
    </h2>
</section>

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
        <!-- Cart item -->
        <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">
                @if(count($products) > 0)
                <table class="table-shopping-cart">
                    <tr class="table-head">
                        <th class="column-1"></th>
                        <th class="column-2">Product</th>
                        <th class="column-3">Price</th>
                        <th class="column-4">Discounted Price</th>
                        <th class="column-5">Total</th>
                    </tr>
                    @foreach($products as $product)
                        <tr class="table-row">
                        <td class="column-1">
                            <div class="cart-img-product b-rad-4 o-f-hidden">
                                <img src="{{ url("storage") . "/$product->image" }}" alt="IMG-PRODUCT">
                            </div>
                        </td>
                        <td class="column-2">{{ $product->name }}</td>
                        <td class="column-3">${{ $product->price }}</td>
                        <td class="column-4">${{ $product->discounted_price }}</td>
                        <td class="column-5">
                            <form action="{{ url("wishlists/$product->id") }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                @else
                    <p>You dont have any product in your wishlist!</p>
                @endif
            </div>
        </div>

    </div>
</section>
@endsection