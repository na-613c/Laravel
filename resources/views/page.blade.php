@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <h2>{{$obj->name ?? ""}}</h2>
                <div class="card-body">
                    {!!$obj->body ?? ""!!}

                    @foreach($obj->comments()->get() as $one)
                    {{(isset($one->name))?$one->null:''}}
                    <h2>{{$one->name}}</h2>
                    {{(isset($one->message))?$one->null:''}}
                    <div>{!!$one->message!!}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection