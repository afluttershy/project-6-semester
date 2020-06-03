@extends('layout')

@section('content')
    <div class="cart-page">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Корзина</li>
            </ol>
        </nav>

        
        <h1>Корзина</h1>
        <div class="cart-divs">
            <div class="cart-one">
                <img src="../img/square-images/pizza1.png">
                <div>
                    <h3>Пицца «Сингапур» на тонком тесте 30 см</h3>
                    <p>130 г</p>
                </div>
                <p class="price">999 &#8381;</p>
                <a href="#"><img class="icon-delete" src="img/icon-delete.png"></a>
            </div> 
            <div class="cart-one">
                <img src="../img/square-images/pizza1.png">
                <div>
                    <h3>Пицца «Сингапур» на тонком тесте 30 см</h3>
                    <p>130 г</p>
                </div>
                <p class="price">999 &#8381;</p>
                <a href="#"><img class="icon-delete" src="img/icon-delete.png"></a>
            </div> 
        </div>



        <form class="order-address-form">
            <h2>Укажите адрес доставки</h2>
            <div class="form-div adress">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="street">Улица</label>
                        <input requried type="text" class="form-control" id="street">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="house">Дом</label>   
                        <input requried type="text" class="form-control" id="house">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="flat">Квартира</label>
                        <input requried type="text" class="form-control" id="flat">
                    </div>
                </div>
            </div>
            <h2>Ваши контактные данные</h2>
            <div class="form-div contacts">
                <div class="form-group">
                    <div>
                        <label for="name">Имя</label>
                        <input requried class="form-control" type="text" id="name" name="name">
                    </div>
                    <div>
                        <label for="tel">Телефон</label>
                        <input requried class="form-control" type="number" id="tel" name="tel">
                    </div>
                </div>
            </div>
            <h2>Оплата при получении</h2>
            <div class="form-div payment">
                <div class="form-group">
                    <label><input type="checkbox" name="option1" value="1">Наличными</label>
                    <label><input type="checkbox" name="option2" value="2">Банковской картой</label>
                </div>
            </div>
            <div class="bottom">
                <a href="#">Страница для печати деталей заказа</a>
                <button type="submit" class="btn-auth">Оформить заказ</button>
            </div>
        </form>


    </div>
@endsection