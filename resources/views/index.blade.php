@extends('layouts.base')

@section('content')
<div class="py-5 mt-3 mb-5 text-center shadow-sm" style="background-color: rgba(255,255,255,0.7);">
  <div class="container">
    <h1 class="jumbotron-heading">ГЛАВНАЯ СТРАНИЦА</h1>
    <p class="lead">Добро пожалавать на наш сайт. Здесь вы можите добавить или просмотреть отзывы о других сайтах.</p>
  </div>
</div>

<div class="container mb-5">
  <div class=" p-5 bg-light align-center shadow-lg rounded">
    <div class="row">

      @foreach ($comments as $comment)

      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">

          <img id="{{$comment->id}}" class="my_image" src="https://i.gifer.com/AvGf.gif" width="auto" height="225" alt="{{$comment->name}} " style=" object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">{{$comment->name}}</h5>
            <p class="card-text text-truncate">
              {{$comment->message}}
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <a href="/{{$comment->site}}" class="btn btn-primary stretched-link">Перейти к статье</a>
              <small class="text-muted">{{$comment->updated_at}}</small>
            </div>
          </div>
        </div>
      </div>

      @endforeach


      <script>
        let id = 0;

        function new_img() {
          id++;

          const rnd = Math.floor(Math.random() * Math.floor(988));
          const real_id = "#" + id;

          if ($(real_id).length) {
            $.getJSON(`https://picsum.photos/v2/list?page=${rnd}&limit=1`, function(data) {
              let imgUrl = data[0].download_url;
              console.log(1)
              $(real_id).attr("src", imgUrl)
            });

            new_img();
          }
        }

        new_img();
      </script>

    </div>
  </div>
</div>
@endsection