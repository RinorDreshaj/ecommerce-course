@extends('admin.layouts.app')

@section('content')
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <strong>Order</strong>
            </div>
            <div class="card-block">
                <div class="form-group">
                    <label for="company">Order Id</label>
                    <input class="form-control" type="text"
                           value="{{ $order->id }}" disabled>
                </div>

                <div class="form-group">
                    <label for="vat">User Id</label>
                    <input class="form-control" value="{{ $order->user_id }}" type="text" disabled="disabled">
                </div>
                <div class="form-group">
                    <label for="vat">User Full name</label>
                    <input class="form-control" value="{{ $order->user->name }}" type="text" disabled="disabled">
                </div>

                <table class="table table-bordered table-striped table-condensed">
                    <tr>
                        <td>Product id</td>
                        <td>Product name</td>
                        <td>Product Price</td>
                        <td>Quantity</td>
                        <td>Total Price</td>
                    </tr>
                    @foreach($order->order_lines as $line)
                        <tr>
                            <td>{{ $line->product_id }}</td>
                            <td>{{ $line->product->name }}</td>
                            <td>{{ $line->product->discounted_price }} $</td>
                            <td>{{ $line->quantity }}</td>
                            <td>{{ $line->price }} $</td>
                        </tr>
                    @endforeach
                </table>

                <div class="form-group">
                    <label for="street">Total Price</label>
                    <input class="form-control" value="{{ $order->price }}" type="text" disabled>
                </div>
            </div>
        </div>

    </div>
@endsection