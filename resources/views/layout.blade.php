<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/css.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body class="body">
    <header>
        <div class="menu-top">
            <a href="{{ url('/') }}"><img class='logo' src="/img/logo.png"></a>
            <div class="menu-info">
                <div class="search">
                    <img src="/img/icon-search.png">
                    <form method="GET" action="{{ route('menu')}}">
                        <input class="form-control" type="text" name="search" placeholder="Введите блюдо" value="{{request()->search}}">
                    </form>
                </div>
                <p class="number">+7 (999) 999-99-99</p>
                <div class="time">10:00 - 23:00</div>
                <div class="enter">
                    <img src="/img/icon-auth.png">
                    @guest
                    <a href="{{ url('/login') }}">Войти</a>
                    @endguest
                    @auth
                    <a href="{{ route('myorders') }}">Мои заказы</a>
                    <a href="{{ route('getlogout') }}" style="color:#E75536;">Выйти</a>
                    @endauth
                </div>
                <div class="cart">
                    <img src="/img/icon-cart.png">
                    <a href="{{ url('/cart') }}">Корзина</a>
                </div>
            </div>
        </div>
        <div class="menu-list">
            <ul>  
                <a @if(Route::currentRouteNamed('index')) class="active" @endif href="{{ route('index') }}"><li>Главная</li></a>
                <a @if(Route::currentRouteNamed('sale')) class="active" @endif href="{{ route('sale') }}"><li>Акции</li></a>
                <a @if(Route::currentRouteNamed('menu')) class="active" @endif href="{{ route('menu') }}"><li>Меню</li></a>
                <a @if(Route::currentRouteNamed('contacts')) class="active" @endif href="{{ route('contacts') }}"><li>Контакты</li></a>
            </ul>
        </div>
    </header>

    <main>
    @yield('content')

    </main>

    <footer>
        <div class="footer">
            <div class="left">
                <ul>    
                    <a href="{{ url('/') }}"><li>Главная</li></a>
                    <a href="{{ url('/sale') }}"><li>Акции</li></a>
                    <a href="{{ url('/menu') }}"><li>Меню</li></a>
                    <a href="{{ url('/contacts') }}"><li>Контакты</li></a>
                </ul>
            
            </div>
            <div class="right">
                <h2>+7 (999) 999-99-99</h2>
                <a href="#"><img src="/img/icon-pinterest.png"></a>
                <a href="#"><img src="/img/icon-inst.png"></a>
                <a href="#"><img src="/img/icon-twitter.png"></a>
            </div>
        </div>
        <p>&copy; 2020 ООО “Еда”, официальный сайт</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>