@extends('layouts.app')

@section('content')
<div class="editor-page">
    <div class="justify-content-center">
        
            <div class="card">
                <div class="card-header">
                    <p>Редактор</p> 
                    <div class="menu">
                        <a @if(Route::currentRouteNamed('editor')) class="active" @endif href="{{ route('editor.index') }}">Акции</a>
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
                        <h1>Товары</h1>
                        <a class="btn btn-success" style="float:right; margin-bottom: 30px;" type="button" href="{{ route('editor-menu.create') }}">Добавить новый товар</a>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Название
                                </th>
                                <th>
                                    Цена
                                </th>
                                <th>
                                    Действия
                                </th>
                            </tr>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <form action="{{ route('editor-menu.destroy', $product) }}" method="POST">
                                                    <a class="btn btn-success" type="button" href="{{ route('editor-menu-show', $product->id) }}">Открыть</a>
                                                    <a class="btn btn-warning" type="button" href="{{ route('editor-menu-edit', $product->id) }}">Редактировать</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <input class="btn btn-danger" type="submit" value="Удалить">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
      
    </div>
</div>
@endsection