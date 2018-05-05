@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-edit"></i>Categories
                </div>
                <div class="card-block">

                    <img src="{{ url("storage") . "/$category->image" }}" alt="" class="img-responsive" style="width: 300px;">
                    <form class="form-horizontal" action="{{ url("admin/categories/$category->id") }}"
                          method="POST" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="form-control-label" for="prependedInput">Category Image</label>
                            <div class="controls">
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="prependedInput">Name</label>
                            <div class="controls">
                                <input class="form-control" size="16" type="text" name="name" required value="{{ $category->name }}">
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