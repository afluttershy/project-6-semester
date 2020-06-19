@extends('layout')

@section('content')
<div class="auth-page">
    <img class="person-auth" src="img/person-auth.png">



    <form method="POST" class="auth-form" action="{{ route('login') }}">
        @csrf
        <h1>Авторизация</h1>
        <label for="email">Логин</label>
        <!--<input requried class="form-control" type="login" id="login" name="login">-->
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


        <label for="password">Пароль</label>
        <!--<input requried class="form-control" type="password" id="password" name="password">-->
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                             
                               
        <a class="nav-link" style="padding-left: 0px; width: 100px;" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                              
                        
       <!-- <button type="submit" class="btn-auth">Войти</button>-->
    
                            
                                <button type="submit" class="btn-auth">
                                    {{ __('Войти') }}
                                </button>

                      
                        

    </form>





</div>

@endsection