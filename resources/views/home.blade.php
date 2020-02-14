@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <h2 class="card-header">Вход</h2>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Вы вошли под именем {{ Auth::user()->name }}

                </div>
                <div class="card-footer">
                    <a href="/" class="btn btn-primary float-right">На главную</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection