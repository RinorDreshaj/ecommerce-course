@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>Categories
                    <a href="{{ url('admin/categories/create') }}" style="float: right;">
                        + Add Category
                    </a>
                </div>
                <div class="card-block">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $key => $category)
                            <tr>
                                <td>
                                    <img src="{{ url("storage/" . $category->image) }}" alt="" class="img-responsive" style="width: 75px;">
                                </td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ url("admin/categories/$category->id/edit") }}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ url("admin/categories/$category->id") }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="DELETE" class="btn btn-danger">
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