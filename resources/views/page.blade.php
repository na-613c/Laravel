@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <h2>{{$obj->name}}</h2>

                <div class="card-body">
                    {!!$obj->body!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection