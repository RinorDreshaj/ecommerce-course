@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-edit"></i>Product Description
                </div>
                <div class="card-block">
                    <form class="form-horizontal" action="{{ url("admin/products/$product->id") }}" method="POST" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}

                        <img src="{{ url("storage/". $product->image) }}" alt="" class="img-responsive" style="width: 200px;">
                        <div class="form-group">
                            <label class="form-control-label" for="prependedInput">Product Image</label>
                            <div class="controls">
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="prependedInput">Name</label>
                            <div class="controls">
                                <input class="form-control" size="16" type="text" name="name" value="{{ $product->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="prependedInput">Description</label>
                            <div class="controls">
                                <textarea class="form-control" name="description">{{ $product->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="prependedInput">Price</label>
                            <div class="controls">
                                <input class="form-control" size="16" type="text" name="price" value="{{ $product->price }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="prependedInput">Discount</label>
                            <div class="controls">
                                <input class="form-control" size="16" type="text" name="discount"  value="{{ $product->discount }}">
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection