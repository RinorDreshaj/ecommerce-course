@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <form action="{{ url("admin/products/$product->id/items") }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" class="form-control" name="image">
                        <input type="submit" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>{{ $product->name }}
                    <a href="{{ url('admin/products/create') }}" style="float: right;">
                        + Add Item
                    </a>
                </div>
                <div class="card-block">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($product->items as $item)
                                <tr>
                                    <td>{{ $item->product_id }}</td>
                                    <td><img src="{{ url("storage/" . $item->image) }}" alt="" class="img-responsive" style="width: 75px;"></td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <form action="{{ url("admin/products/$product->id/items/$item->id") }}" method="POST">
                                            {{ method_field("DELETE") }}
                                            {{ csrf_field() }}
                                            <input type="submit" value="delete" class="btn btn-danger">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection