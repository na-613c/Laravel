@extends('layouts.base')

@section('content')
<div class="container text-center shadow-sm rounded mt-5 mb-4 py-3 " style="background-color: rgba(255,255,255,0.9);">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <div class="row pl-5 justify-content-center">
                    <div class="col-md-5 text-md-left">
                        <h1>
                            Что-то пошло не так!
                        </h1>
                        <div class="justify-content-start">
                            <h4>
                                @if(isset($name))
                                Статья с названием
                                <span class="font-italic text-danger">
                                    «{{$name}}»
                                </span><br>
                                не существует.

                                @else

                                Ссылка
                                <span class="font-italic text-danger">
                                    laravel<?php echo $_SERVER['REQUEST_URI']; ?>
                                </span><br>
                                не существует.

                                @endif
                            </h4>
                            <span> Возможно произошло следующее:</span>
                            <ul>
                                <li>
                                    Вы написали URL или название статьи с <span class="font-italic text-danger">ошибкой</span>.
                                </li>
                                <li>
                                    Искомая страница не существует.
                                </li>
                                <li>
                                    Искомая страница была перемещена.
                                </li>
                                <li>
                                    Искомая страница была удалена.
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <img src="https://cs5.pikabu.ru/images/previews_comm/2015-11_4/1447743003171473167.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection