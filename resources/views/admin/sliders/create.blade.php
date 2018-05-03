@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-edit"></i>Product Description
                </div>
                <div class="card-block">
                    <form class="form-horizontal" action="{{ url("admin/sliders") }}"
                          method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="form-control-label" for="prependedInput">Slider Image</label>
                            <div class="controls">
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="prependedInput">Title</label>
                            <div class="controls">
                                <input class="form-control" size="16" type="text" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="prependedInput">Subtitle</label>
                            <div class="controls">
                                <input class="form-control" size="16" type="text" name="subtitle">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="prependedInput">Status</label>
                            <div class="controls">
                                <select name="status" id="">
                                    <option value="0"> Inactive</option>
                                    <option value="1"> Active</option>
                                </select>
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