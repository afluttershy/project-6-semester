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
                <form class="menu-form" method="GET" action="{{ route('menu') }}">
                    <div class="price">
                        <p>Цена:</p>
                        <input class="form-control" type="text" name="from" placeholder="От" value="{{request()->from}}">
                        <input class="form-control" type="text" name="to" placeholder="До" value="{{request()->to}}">
                    </div>
                    <div class="type">
                        <p>Тип:</p>
                        <label><input type="checkbox" name="pizza" value="1" @if(request()->has('pizza')) checked @endif >Пицца</label>
                        <label><input type="checkbox" name="sushi" value="1" @if(request()->has('sushi')) checked @endif >Суши</label>
                        <label><input type="checkbox" name="drink" value="1" @if(request()->has('drink')) checked @endif >Напитки</label>
                        <label><input type="checkbox" name="sweet" value="1" @if(request()->has('sweet')) checked @endif >Десерты</label>
                    </div>
                    <button type="submit" class="filters-btn">Применить</button>
                    <a href="{{ route('menu') }}" class="dismiss"><div>Сбросить</div></a>
                </form>
            </div>
            <div class="list">

                @foreach ($productsmodel as $product)
                    <div>
                        <img src="{{ Storage::url($product->image) }}">
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
        <div class="links">
            {{$productsmodel->links()}}
        </div>
    </div>
@endsection