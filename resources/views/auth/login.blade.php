@extends('layouts.base')

@section('content')

<script>
    $(document).ready(function() {
        $('#s-h-pass').click(function() {
            let yey_outline = "<svg class=\"bi bi-eye\" width=\"32\" height=\"32\" viewBox=\"0 0 20 20\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\"> <path fill-rule=\"evenodd\" d=\"M18 10s-3-5.5-8-5.5S2 10 2 10s3 5.5 8 5.5 8-5.5 8-5.5zM3.173 10a13.133 13.133 0 001.66 2.043C6.12 13.332 7.88 14.5 10 14.5c2.12 0 3.879-1.168 5.168-2.457A13.133 13.133 0 0016.828 10a13.133 13.133 0 00-1.66-2.043C13.879 6.668 12.119 5.5 10 5.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 003.172 10z\" clip-rule=\"evenodd\"></path> <path fill-rule=\"evenodd\" d=\"M10 7.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM6.5 10a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z\" clip-rule=\"evenodd\"></path></svg>"
            let yey_off_outline = "<svg class=\"bi bi-eye-slash\" width=\"32\" height=\"32\" viewBox=\"0 0 20 20\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M15.359 13.238C17.06 11.72 18 10 18 10s-3-5.5-8-5.5a7.028 7.028 0 00-2.79.588l.77.771A5.944 5.944 0 0110 5.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0116.828 10c-.058.087-.122.183-.195.288a13.14 13.14 0 01-1.465 1.755c-.165.165-.337.328-.517.486l.708.709z\"></path> <path d=\"M13.297 11.176a3.5 3.5 0 00-4.474-4.474l.823.823a2.5 2.5 0 012.829 2.829l.822.822zm-2.943 1.299l.822.822a3.5 3.5 0 01-4.474-4.474l.823.823a2.5 2.5 0 002.829 2.829z\"></path> <path d=\"M5.35 7.47c-.18.16-.353.322-.518.487A13.134 13.134 0 003.172 10l.195.288c.335.48.83 1.12 1.465 1.755C6.121 13.332 7.881 14.5 10 14.5c.716 0 1.39-.133 2.02-.36l.77.772A7.027 7.027 0 0110 15.5c-5 0-8-5.5-8-5.5s.939-1.721 2.641-3.238l.708.709z\"></path> <path fill-rule=\"evenodd\" d=\"M15.646 16.354l-12-12 .708-.708 12 12-.708.707z\" clip-rule=\"evenodd\"></path> </svg>"

            let type = $('#password').attr('type') == "text" ? "password" : 'text',
                c = $(this).html() == yey_off_outline ? yey_outline : yey_off_outline;
            $(this).html(c);
            $('#password').prop('type', type);
        });
    });
</script>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="card-header">{{ __('Вход') }}</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail адресс') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <div class="badge badge-secondary input-group-addon" id="s-h-pass">
                                        <svg class="bi bi-eye" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M18 10s-3-5.5-8-5.5S2 10 2 10s3 5.5 8 5.5 8-5.5 8-5.5zM3.173 10a13.133 13.133 0 001.66 2.043C6.12 13.332 7.88 14.5 10 14.5c2.12 0 3.879-1.168 5.168-2.457A13.133 13.133 0 0016.828 10a13.133 13.133 0 00-1.66-2.043C13.879 6.668 12.119 5.5 10 5.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 003.172 10z" clip-rule="evenodd"></path>
                                            <path fill-rule="evenodd" d="M10 7.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM6.5 10a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Запомнить меня') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Войти') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Забыли свой пароль?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection