@extends('layout')

@section('content')
<div class="auth-page">
    <img class="person-auth" src="img/person-auth.png">
    <form method="POST" class="auth-form">
        <h1>Авторизация</h1>
        <label for="login">Логин</label>
        <input requried class="form-control" type="login" id="login" name="login">
        <label for="password">Пароль</label>
        <input requried class="form-control" type="password" id="password" name="password">
        <button type="submit" class="btn-auth">Войти</button>

    </form>
</div>

@endsection