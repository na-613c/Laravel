@extends('layouts.base')
@section('content')

<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })

    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script>

<div class="container text-center shadow-sm rounded my-5 py-5 mb-5" style="background-color: rgba(255,255,255,0.9);">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-4">
                        <h2>
                            {{$obj->name ?? ""}}
                            {{$comm->name ?? ""}}
                        </h2>
                    </div>
                    <div class="col-4">

                        @if( (Auth::user()->email??"") === ($comm->email??"") )
                        <form action="{{asset('delete/'.$comm->id)}}" method="get">
                            {!!csrf_field()!!}
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-xl">
                                    Редактировать
                                    <svg class="bi bi-pencil" width="1.5em" height="1.5em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M13.293 3.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM14 4l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"></path>
                                        <path fill-rule="evenodd" d="M14.146 8.354l-2.5-2.5.708-.708 2.5 2.5-.708.708zM5 12v.5a.5.5 0 00.5.5H6v.5a.5.5 0 00.5.5H7v.5a.5.5 0 00.5.5H8v-1.5a.5.5 0 00-.5-.5H7v-.5a.5.5 0 00-.5-.5H5z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <button type="submit" class="btn btn-secondary float-right">
                                    Удалить
                                    <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.5 7.5A.5.5 0 018 8v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V8z"></path>
                                        <path fill-rule="evenodd" d="M16.5 5a1 1 0 01-1 1H15v9a2 2 0 01-2 2H7a2 2 0 01-2-2V6h-.5a1 1 0 01-1-1V4a1 1 0 011-1H8a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM6.118 6L6 6.059V15a1 1 0 001 1h6a1 1 0 001-1V6.059L13.882 6H6.118zM4.5 5V4h11v1h-11z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            Редактирование статьи «{{$comm->name?? ""}}»
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                &times;
                                            </span>
                                        </button>
                                    </div>

                                    <form action="{{asset('comment/'.$comm->id)}}" method="post">
                                        {!!csrf_field()!!}
                                        <div class="form-group">
                                            <div class="modal-body">
                                                <textarea name="message" cols="150" rows="20">
                                                {{$comm->message?? ""}}
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>


                        @elseif (isset($comm->email))
                        <p class="float-right  mt-2" data-toggle="tooltip" data-placement="top" title="Владелец статьи">
                            <svg class="bi bi-award" width="1.5em" height="1.5em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 2l1.669.864 1.858.282.842 1.68 1.337 1.32L15.4 8l.306 1.854-1.337 1.32-.842 1.68-1.858.282L10 14l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L4.6 8l-.306-1.854 1.337-1.32.842-1.68 1.858-.282L10 2z"></path>
                                <path d="M6 13.794V18l4-1 4 1v-4.206l-2.018.306L10 15.126 8.018 14.1 6 13.794z"></path>
                            </svg> {{$comm->email??""}}
                        </p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card-body text-justify">
                <p>
                    Данный сайт распологается по адресу
                    <a href="{{$comm->url}}" target="_blank">{{$comm->url}}</a>
                </p>
                {!!$obj->body ?? ""!!}
                {!!$comm->message?? ""!!}
            </div>
        </div>
    </div>
</div>

@endsection