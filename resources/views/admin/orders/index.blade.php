@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>User ID</th>
                                <th>User name</th>
                                <th>Number of products</th>
                                <th>Product Ids</th>
                                <th>Total Price</th>
                                <th>Edit</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $key => $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->user_id }}</td>
                                    <td>{{ $order->user->name}}</td>
                                    <td>{{ $order->order_lines->count() }}</td>
                                    <td>{{ $order->order_lines->pluck('product_id') }}</td>
                                    <td>${{ $order->price }}</td>
                                    <td><a href="{{ url("admin/orders/$order->id/edit") }}">Edit</a></td>
                                    <td><a href="{{ url("admin/orders/$order->id") }}">Show</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection