@extends('layouts.base')

@section('content')

<div class="container shadow-sm rounded pt-3 mb-5 pb-1" style="
        background-color: rgba(255,255,255,0.7);">
    <div class=" py-5 text-center">

        <h4>Форма создания новой статьи</h4>
        <br>
        <form action="{{asset('add')}}" method="post">
            {!!csrf_field()!!}
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="name">Название статьи:</label>
                        <input type="name" name="name" class="border border-dark form-control" id="name" placeholder="Name">
                        @error("name")
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email1">E-mail:</label>
                        <input type="email" name="email" class="border border-dark form-control" id="email1" placeholder="Email">
                        @error("email")
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="site">URL сайта:</label>
                        <input type="site" name="site" class="border border-dark form-control" id="site" placeholder="URL">
                        @error("site")
                        {{$message}}
                        @enderror
                    </div>

                </div>
                <div class="col-md-8 mb-3">
                    <div class="form-group">
                        <label for="message">Текст статьи:</label>
                        <textarea class="border border-dark form-control" name="message" rows="9"></textarea>
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-info">Отправить статью</button>

        </form>
    </div>
</div>
@endsection