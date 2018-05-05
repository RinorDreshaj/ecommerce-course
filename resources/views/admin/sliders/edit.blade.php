@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-edit"></i>Product Description
                </div>
                <div class="card-block">
                    <form class="form-horizontal" action="{{ url("admin/sliders/$slider->id") }}"
                          method="POST" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}

                        <img src="{{ url("storage") . "/$slider->image" }}" alt="" class="img-responsive" style="width: 300px;">
                        
                        <div class="form-group">
                            <label class="form-control-label" for="prependedInput">Slider Image</label>
                            <div class="controls">
                                <input type="file" class="form-control" name="image" value="{{ $slider->image }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="prependedInput">Title</label>
                            <div class="controls">
                                <input class="form-control" size="16" type="text" name="title" value="{{ $slider->title }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="prependedInput">Subtitle</label>
                            <div class="controls">
                                <input class="form-control" size="16" type="text" name="subtitle" value="{{ $slider->subtitle }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="prependedInput">Status</label>
                            <div class="controls">
                                <select name="status" id="">
                                    <option value="0" @if($slider->status==0) selected @endif> Inactive</option>
                                    <option value="1" @if($slider->status == 1) selected @endif> Active</option>
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