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

                    <form method="POST" enctype="multipart/form-data" action="{{ route('editor-menu.store') }}">
                        <h1>Добавить новый товар</h1>
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
                                <label for="composition" class="col-sm-2 col-form-label">Состав: </label>
                                <div class="col-sm-6">
                                    <textarea required name="composition" id="composition" cols="58" rows="7"></textarea>
                                </div>
                            </div>
                            <br>
                        

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="proteins">Белки:</label>
                                    <input required type="number" name="proteins" class="form-control" id="proteins">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="fats">Жиры:</label>   
                                    <input required type="number" name="fats" class="form-control" id="fats">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="carbohydrates">Углеводы:</label>
                                    <input required type="number" name="carbohydrates" class="form-control" id="carbohydrates">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="energy">Энерг. ценность:</label>
                                    <input required type="number" name="energy" class="form-control" id="energy">
                                </div>
                            </div>
                            <br>

                            <div class="input-group row">
                                <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                                <div class="col-sm-6">
                                    <input required type="number" class="form-control" name="price" id="price">
                                </div>
                            </div>
                            <br>
                            <p>Выберите тип товара (поставьте 1 на выбранный тип товара, иначе 0):</p>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="pizza">Пицца:</label>
                                    <input required type="number" name="pizza" class="form-control" id="pizza">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="sushi">Суши:</label>   
                                    <input required type="number" name="sushi" class="form-control" id="sushi">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="drink">Напиток:</label>
                                    <input required type="number" name="drink" class="form-control" id="drink">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="sweet">Десерт:</label>
                                    <input required type="number" name="sweet" class="form-control" id="sweet">
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