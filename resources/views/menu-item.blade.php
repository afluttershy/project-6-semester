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
                <h2>Пицца «Сингапур» на тонком тесте 30 см</h2>
                <p>Нежная курица, острый халапеньо и соус том ям на тонком тесте практически без корочки — авторская пицца в азиатском стиле.</p>
                <h3>Цена: 999 &#8381;</h3>
                <a href="#" class="btn-main">В корзину <img class="icon" src="../img/icon-cart.png"></a>
            </div>
        </div>
        <div class="menu-item-bottom">
            <h3>Состав:</h3>
            <p>Куриное филе бедра марин., помидоры, красный лук, перец халапеньо, сырный соус, соус том ям, сыр моцарелла, тесто дрожжевое, мука в/с из твердых сортов пшеницы.</p>
            <div class="energy">
                <h3>Энергетическая ценность (на 100 г):</h3>
                <div>
                    <h4>Белки</h4>
                    <p>9 г</p>
                </div>
                <div>
                    <h4>Жиры</h4>
                    <p>11 г</p>
                </div>
                <div>
                    <h4>Углеводы</h4>
                    <p>17 г</p>
                </div>
                <div>
                    <h4>Энерг. ценность</h4>
                    <p>200 кКал</p>
                </div>
            </div>

        </div>
        <img class="menu-item-person" src="img/person-goodinfo.png">
    </div>
</div>
@endsection