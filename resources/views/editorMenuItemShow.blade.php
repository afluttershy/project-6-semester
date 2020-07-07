@extends('layouts.app')

@section('content')
<div class="editor-page">
    <div class="justify-content-center">
        
            <div class="card">
                <div class="card-header">
                    <p>Редактор</p> 
                    <div class="menu">
                        <a @if(Route::currentRouteNamed('editor.index')) class="active" @endif href="{{ route('editor.index') }}">Акции</a>
                        <a @if(Route::currentRouteNamed('editor-menu.index')) class="active" @endif href="{{ route('editor-menu.index') }}">Товары</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-12">
                        <h1>Просмотр товара ID {{ $product->id }}</h1>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>
                                    Поле
                                </th>
                                <th>
                                    Значение
                                </th>
                            </tr>
                            <tr>
                                <td>ID</td>
                                <td>{{ $product->id }}</td>
                            </tr>
                           
                            <tr>
                                <td>Название</td>
                                <td>{{ $product->name }}</td>
                            </tr>
                            <tr>
                                <td>Описание</td>
                                <td>{{ $product->description }}</td>
                            </tr>
                            <tr>
                                <td>Состав</td>
                                <td>{{ $product->composition }}</td>
                            </tr>
                            <tr>
                                <td>Белки</td>
                                <td>{{ $product->proteins }}</td>
                            </tr>
                            <tr>
                                <td>Жиры</td>
                                <td>{{ $product->fats }}</td>
                            </tr>
                            <tr>
                                <td>Углеводы</td>
                                <td>{{ $product->carbohydrates }}</td>
                            </tr>
                            <tr>
                                <td>Энерг. ценность</td>
                                <td>{{ $product->energy }}</td>
                            </tr>
                            <tr>
                                <td>Цена</td>
                                <td>{{ $product->price }}</td>
                            </tr>
                            <tr>
                                <td>Тип (1 - да)</td>
                                <td>Пицца: {{ $product->pizza }}, суши: {{ $product->sushi }}, напиток: {{ $product->drink }}, десерт: {{ $product->sweet }}</td>
                            </tr>
                            <tr>
                                <td>Картинка</td>
                                <td><img src="{{ Storage::url($product->image) }}"
                                        height="240px"></td>
                            </tr>
                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
      
    </div>
</div>
@endsection