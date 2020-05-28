@extends('layout')

@section('content')
    <div class="menu-page">
        <h1>Меню</h1>
        <form method="POST" action="#">
            <div class="price">
                <label>Цена:</label>
                <input requried class="form-control" type="login" name="login" placeholder="От">
                <input requried class="form-control" type="password" name="password" placeholder="До">
            </div>
            <div class="type">
                <label>Тип:</label>
                <label><input type="checkbox" name="option1" value="1">Пицца</label>
                <label><input type="checkbox" name="option2" value="2">Суши</label>
                <label><input type="checkbox" name="option3" value="3">Паста</label>
                <label><input type="checkbox" name="option4" value="4">Напитки</label>
                <label><input type="checkbox" name="option5" value="5">Десерты</label>
                <label><input type="checkbox" name="option6" value="6">Комбо наборы</label>

            </div>
            <button type="submit" class="btn">Применить</button>
            <a href="#"><div class="dismiss">Сбросить</div></a>
        </form>
        <div class="list">
            <div>
                <img src="../img/square-images/pizza1.png">
                <h2>Название<h2>
                <h3>999 &#8381;</h3>
                <form method="POST" action="#">
                    <button type="submit" class="btn-cart"><img src="../img/icon-cart.png"></button>
                </form>
            </div>
        </div> 
    </div>
@endsection