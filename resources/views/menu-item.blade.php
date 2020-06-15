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
            <img class="item-picture" src="../img/square-images/pizza1.png">
            <div>
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <h3>{{ $product->price }} &#8381;</h3>
                <a href="#" class="btn-main">В корзину <img class="icon" src="../img/icon-cart.png"></a>
            </div>
        </div>
        <div class="menu-item-bottom">
            <h3>Состав:</h3>
            <p>{{ $product->composition }}</p>
            <div class="energy">
                <h3>Энергетическая ценность (на 100 г):</h3>
                <div>
                    <h4>Белки</h4>
                    <p>{{ $product->proteins }} г</p>
                </div>
                <div>
                    <h4>Жиры</h4>
                    <p>{{ $product->fats }} г</p>
                </div>
                <div>
                    <h4>Углеводы</h4>
                    <p>{{ $product->carbohydrates }} г</p>
                </div>
                <div>
                    <h4>Энерг. ценность</h4>
                    <p>{{ $product->energy }} кКал</p>
                </div>
            </div>

        </div>
        <img class="menu-item-person" src="img/person-goodinfo.png">
    </div>
</div>
@endsection