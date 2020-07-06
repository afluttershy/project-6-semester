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
                        <h1>Просмотр товара</h1>
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
                                <td>Картинка</td>
                                <td><img src="http://laravel-diplom-1.rdavydov.ru/storage/categories/appliance.jpg"
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