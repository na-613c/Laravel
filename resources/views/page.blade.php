@extends('layouts.base')
@section('content')


<div class="container text-center shadow-sm rounded my-5 pt-5 mb-5" style="background-color: rgba(255,255,255,0.9);">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>
                {{$obj->name ?? ""}}
                {{$comm->name ?? ""}}
                @if( (Auth::user()->email??"") === ($comm->email) )
                <a href="#" class="btn btn-primary float-right">Редактировать <svg class="bi bi-pencil" width="1.5em" height="1.5em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.293 3.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM14 4l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"></path>
                        <path fill-rule="evenodd" d="M14.146 8.354l-2.5-2.5.708-.708 2.5 2.5-.708.708zM5 12v.5a.5.5 0 00.5.5H6v.5a.5.5 0 00.5.5H7v.5a.5.5 0 00.5.5H8v-1.5a.5.5 0 00-.5-.5H7v-.5a.5.5 0 00-.5-.5H5z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                @endif
            </h2>
            <div class="card-body text-justify">
                {!!$obj->body ?? ""!!}
                {!!$comm->message?? ""!!}
            </div>
        </div>
    </div>
</div>

@endsection