@extends('layout')

@section('content')
<div class="menu-item-page">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Главная</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/menu') }}">Меню</a></li>
            <li class="breadcrumb-item active" aria-current="page">Блюдо</li>
        </ol>
    </nav>
    <div class="menu-item">
        <div class="menu-item-top">
            <img src="../img/square-images/pizza1.png">
            <div>
                <h2>Название</h2>
                <p>Описание</p>
                <h3>Цена: 999 &#8381;<h3>
            </div>
        <div>
        <div class="menu-item-bottom">
        </div>
    </div>
</div>
@endsection