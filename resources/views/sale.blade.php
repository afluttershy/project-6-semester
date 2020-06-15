@extends('layout')

@section('content')
    <div class="sale-page">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Акции</li>
            </ol>
        </nav>
        <h1>Акции</h1>
        <div class="sale-divs">

            @foreach ($sales as $sale)
                <div class="sale-one">
                    <img src="../img/square-images/pizza1.png">
                    <div class="sale-info">
                        <h2>{{ $sale->name }}</h2>
                        <p>{{ $sale->description }}</p>
                        <a href="{{ url('/menu') }}" class="btn-main">Меню</a>
                    </div>
                </div> 
            @endforeach


            <!--<div class="sale-one">
                <img src="../img/square-images/pizza1.png">
                <div class="sale-info">
                    <h2>Давай две!</h2>
                    <p>Купи пиццу "Маргарита" 32 см и получи вторую в подарок по промокоду davaidve! Акция действует с 01.06.2020 по 31.06.2020.</p>
                    <a href="{{ url('/menu') }}" class="btn-main">Меню</a>
                </div>
            </div> 
            <div class="sale-one">
                <img src="../img/square-images/pizza3.png">
                <div class="sale-info">
                    <h2>Название акции</h2>
                    <p> Очень-очень длинное-длинное описание акции</p>
                    <a href="{{ url('/menu') }}" class="btn-main">Меню</a>
                </div>
            </div>-->   
        </div>
    </div>
@endsection
