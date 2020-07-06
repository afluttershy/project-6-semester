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

                    <form method="POST" enctype="multipart/form-data" action="{{ route('editor.store') }}">
                        <h1>Добавить новую акцию</h1>
                        <div>
                            @csrf

                            <div class="input-group row">
                                <label for="name" class="col-sm-2 col-form-label">Название: </label>
                                <div class="col-sm-6">
                                    <input required type="text" class="form-control" name="name" id="name">
                                </div>
                            </div>
                            <br>

                            <div class="input-group row">
                                <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                                <div class="col-sm-6">
                                    <textarea required name="description" id="description" cols="58" rows="7"></textarea>
                                </div>
                            </div>
                            <br>

                            <div class="input-group row">
                                <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                                <div class="col-sm-10">
                                    <label class="btn btn-default btn-file">
                                        Загрузить <input type="file" style="display: none;" name="image" id="image">
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Сохранить</button>
                        </div>
                </form>
                        
                </div>
            </div>
      
    </div>
</div>
@endsection