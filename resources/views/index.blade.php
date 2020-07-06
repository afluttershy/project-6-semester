@extends('layout')

@section('content')
        <div class="main-img1">
            <p>Закажи еду с доставкой прямо сейчас!</p>
            <a href="{{ url('/menu') }}" class="btn-main">Меню</a>
        </div>

        <div class="popular">
            <h1>Популярное</h1>
            <div class="popular-divs">
                <a href="{{ url('/menu?from=&to=&pizza=1') }}"><div>
                    <img src="../img/square-images/pizza1.png">
                    <p>Пицца</p>
                </div></a>
                <a href="{{ url('/menu?from=&to=&sushi=1') }}"><div>
                    <img src="../img/square-images/sushi1.png">
                    <p>Cуши</p>
                </div></a>
                <a href="{{ url('/menu?from=&to=&sweet=1') }}"><div>
                    <img src="../img/square-images/sweet1.png">
                    <p>Десерты</p>
                </div></a>
            </div>
            <a href="{{ url('/menu') }}" class="btn-main">Заказать</a>
        </div>

        <div class="main-img2">
            <p>Закажи с ОГРОМНОЙ скидкой</p>
            <a href="{{ url('/sale') }}" class="btn-main">Акции</a>
        </div>   
@endsection