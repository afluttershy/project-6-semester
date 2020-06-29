@extends('layout')

@section('content')

    <div class="menu-page">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Меню</li>
            </ol>
        </nav>
        <h1>Меню</h1>
        @if (session()->has('success'))
            <div class="alert alert-success" style="text-align:center;" role="alert">{{ session()->get('success')}}</div>
        @endif
        <div class="content">
            <div class="filters">
                <form class="menu-form" method="POST" action="#">
                    <div class="price">
                        <p>Цена:</p>
                        <input class="form-control" type="text" name="from" placeholder="От">
                        <input class="form-control" type="text" name="to" placeholder="До">
                    </div>
                    <div class="type">
                        <p>Тип:</p>
                        <label><input type="checkbox" name="option1" value="1">Пицца</label>
                        <label><input type="checkbox" name="option2" value="2">Суши</label>
                        <label><input type="checkbox" name="option3" value="3">Паста</label>
                        <label><input type="checkbox" name="option4" value="4">Напитки</label>
                        <label><input type="checkbox" name="option5" value="5">Десерты</label>
                        <label><input type="checkbox" name="option6" value="6">Комбо наборы</label>

                    </div>
                    <button type="submit" class="filters-btn">Применить</button>
                    <a href="#" class="dismiss"><div>Сбросить</div></a>
                </form>
            </div>
            <div class="list">

                @foreach ($productsmodel as $product)
                    <div>
                        <img src="../img/square-images/pizza1.png">
                        <h2>{{ $product->name }}</h2>
                        <h3>{{ $product->price }} &#8381;</h3>
                        <a href="{{$product->id}}"><img src="../img/icon-cart.png"></a>
                    </div>           
                @endforeach



                <!--<div>
                    <img src="../img/square-images/pizza1.png">
                    <h2>Пицца «Фермерская» 30 см</h2>
                    <h3>999 &#8381;</h3>
                    <a href="{{ url('/item') }}"><img src="../img/icon-cart.png"></a>
                </div>
                <div>
                    <img src="../img/square-images/pizza1.png">
                    <h2>Название</h2>
                    <h3>999 &#8381;</h3>
                    <a href="{{ url('/menu') }}"><img src="../img/icon-cart.png"></a>
                </div>-->
                
                
            </div> 
        </div>
    </div>
@endsection