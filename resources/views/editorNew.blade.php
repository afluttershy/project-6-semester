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

                    <form method="POST" enctype="multipart/form-data" 
                    
                    @isset($sale)
                        action="{{ route('editor.update', $sale) }}"
                    @else
                        action="{{ route('editor.store') }}"
                    @endisset
                    
                    >

                        @isset($sale)
                            <h1>Редактировать акцию ID {{$sale->id}}</h1>
                        @else
                            <h1>Добавить новую акцию</h1>
                        @endisset

                        <div>
                            @isset($sale)
                                @method('PUT')
                            @endisset
                            @csrf

                            <input required type="hidden" class="form-control" name="id" id="id"  value="@isset($sale){{ $sale->id }}@endisset">

                            <div class="input-group row">
                                <label for="name" class="col-sm-2 col-form-label">Название: </label>
                                <div class="col-sm-6">
                                    <input required type="text" class="form-control" name="name" id="name" value="@isset($sale){{ $sale->name }}@endisset">
                                </div>
                            </div>
                            <br>

                            <div class="input-group row">
                                <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                                <div class="col-sm-6">
                                    <textarea required name="description" id="description" cols="58" rows="7">@isset($sale){{ $sale->description }}@endisset</textarea>
                                </div>
                            </div>
                            <br>

                            <div class="input-group row">
                                <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                                <div class="col-sm-10">
                                    <label class="btn btn-default btn-file" style="color:blue;">
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