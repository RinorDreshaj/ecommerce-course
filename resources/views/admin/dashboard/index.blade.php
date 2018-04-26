@extends('admin.layouts.app')

@section('content')
    <div class="col-sm-6 col-md-2">
        <div class="card card-inverse card-warning">
            <div class="card-block">
                <div class="h1 text-muted text-right mb-2">
                    <i class="icon-basket-loaded"></i>
                </div>
                <div class="h4 mb-0">1238</div>
                <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                <div class="progress progress-white progress-xs mt-1">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
@endsection