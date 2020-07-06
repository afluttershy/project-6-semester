@extends('layouts.app')

@section('content')
<div class="editor-page">
    <div class="row justify-content-center">
        
            <div class="card">
                <div class="card-header">
                    <p>Редактор</p> 
                    <div class="menu">
                        <a @if(Route::currentRouteNamed('editor')) class="active" @endif href="{{ route('editor.index') }}">Акции</a>
                        <a  @if(Route::currentRouteNamed('editor-menu.index')) class="active" @endif href="{{ route('editor-menu.index') }}">Товары</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-12">
                        <h1>Акции</h1>
                        <a class="btn btn-success" style="float:right; margin-bottom: 30px;" type="button" href="{{ route('editor.create') }}">Добавить новую акцию</a>
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
                                    Описание
                                </th>
                                <th>
                                    Действия
                                </th>
                            </tr>
                                @foreach($sales as $sale)
                                    <tr>
                                        <td>{{ $sale->id }}</td>
                                        <td>{{ $sale->name }}</td>
                                        <td>{{ $sale->description }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <form action="{{ route('editor.destroy', $sale) }}" method="POST">
                                                    
                                                    <a class="btn btn-warning" type="button" href="{{ route('editor-edit', $sale->id) }}">Редактировать</a>
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
