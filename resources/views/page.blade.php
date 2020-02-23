@extends('layouts.base')
@section('content')

<div class="container text-center shadow-sm rounded my-5 pt-5 mb-5" style="background-color: rgba(255,255,255,0.9);">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>
                {{$obj->name ?? ""}}
                {{$comm->name ?? ""}}
            </h2>
            <div class="card-body">
                {!!$obj->body ?? ""!!}
                {!!$comm->message?? ""!!}
            </div>
        </div>
    </div>
</div>

@endsection