<!doctype html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="о сайтах">

  <title> О САЙТАХ </title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


  <!-- Styles -->
  <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script>
    function startBG() {
      let colors = ['#ec73a8', '#f29700', '#faef01', '#c1d500', '#9dd1a3', '#00a0ea', '#9fc3e7', '#b1569c'];

      let i = Math.floor(Math.random() * Math.floor(7));


      $("body").css({
        "backgroundColor": `${colors[i]}`,
      });


      $("#search").css({
        "color": `${colors[i]}`,
        "border-color": `${colors[i]}`
      });

      $("#search").hover(function() {
        $(this).css({
          "color": "white",
          "background": `${colors[i]}`
        })
      }, function() {
        $(this).css({
          "color": `${colors[i]}`,
          "border-color": `${colors[i]}`,
          "background": 'white'
        })
      });






    }
  </script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <!-- <link href="album.css" rel="stylesheet"> -->



</head>

<body onload="startBG()" style="height: 100vh;" class="d-flex flex-column">

  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-4481610-59', 'auto');
    ga('send', 'pageview');
  </script>


  <header>


    <nav class="navbar navbar-expand-md navbar-light d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->

            @guest
            @else
            <li class="nav-item">
              <a class="nav-link p-2 text-dark" href="{{ asset('add') }}">Добавить отзыв</a>
            </li>
            @endguest
            <li class="nav-item">
              <a class="nav-link p-2 text-dark" href="{{ asset('about') }}">О нас </a>
            </li>
            @guest
            <li class="nav-item">
              <a class="nav-link p-2 text-dark" href="{{ route('login') }}">{{ __('Войти') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item mr-3">
              <a class="nav-link p-2 text-dark" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown  mr-3">
              <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Выйти') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest

            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Найти" aria-label="Найти">
              <button class="btn  my-2 my-sm-0" id="search" type="submit">Поиск</button>
            </form>
          </ul>
        </div>
      </div>
    </nav>

  </header>

  <main role="main">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="mt-auto bd-highlight page-footer font-small bg-dark mt-5 text-white">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-4">© 2020 Copyright:
      <a href="https://vk.com/shavlovsky98"> Иван </a>
      from
      <a href="https://www.bsuir.by/"> БГУИР </a>

    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>


</html>