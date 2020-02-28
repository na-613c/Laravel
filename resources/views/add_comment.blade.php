@extends('layouts.base')

@section('content')

<div class="container shadow-sm rounded pt-3 mb-3 pb-1" style="
        background-color: rgba(255,255,255,0.7);">
    <div class=" py-3 text-center">

        <h2>Форма создания новой статьи</h2>
        <br>
        <form action="{{asset('add')}}" method="post">
            {!!csrf_field()!!}
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="name">Название статьи:</label>
                        <input autocomplete="off" type="name" name="name" class="border border-dark form-control" id="name" placeholder="Название статьи">
                        @error("name")
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email1">E-mail:</label>
                        <datalist id="my_data_email"></datalist>
                        <input autocomplete="off" list="my_data_email" type="email" name="email" class="border border-dark form-control" id="email1" placeholder="Почта">
                        @error("email")
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="url">URL сайта на который вы пишите отзыв:</label>
                        <input autocomplete="off" type="url" name="url" class="border border-dark form-control" id="url" placeholder="URL сайта">
                        @error("url")
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="site">URL по которому бедет находиться статья:</label>
                        <input autocomplete="off" type="site" name="site" class="border border-dark form-control" id="site" placeholder="URL статьи">
                        @error("site")
                        {{$message}}
                        @enderror
                    </div>

                </div>
                <div class="col-md-8 mb-3">
                    <div class="form-group">
                        <label for="message">Текст статьи:</label>
                        <textarea class="border border-dark form-control" name="message" rows="12"></textarea>
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-info">Отправить статью</button>

        </form>
    </div>
</div>
@endsection