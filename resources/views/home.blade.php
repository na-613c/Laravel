@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 my-5">
            <div class="card">
                <h2 class="card-header text-center">Вход</h2>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6 px-5 d-flex flex-column bd-highlight">
                            @if (session('status'))
                            <div class="alert alert-success bd-highlight" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            <div class="bd-highlight">
                                Вы вошли под именем <strong>{{ Auth::user()->name }}</strong>.
                            </div>
                            <div class="bd-highlight">
                                Ваш email: <strong>{{ Auth::user()->email }}</strong>.
                            </div>
                            <div class="mt-auto  bd-highlight">Администрация сайта желает Вам приятного проведения времени. Удачи!</div>
                        </div>
                        <div class="col-md-4" style="height: 290px">
                            <img src="{{asset('img/content_cat.png')}}" height="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/" class="btn btn-primary float-right">На главную</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection