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
                   
                    @isset($product)
                        action="{{ route('editor-menu.update', $product) }}"
                    @else
                        action="{{ route('editor-menu.store') }}"
                    @endisset
                    
                    >
                    @isset($product)
                        <h1>Редактировать товар ID {{$product->id}}</h1>
                    @else
                        <h1>Добавить новый товар</h1>
                    @endisset
                        
                        <div>
                            @isset($product)
                                @method('PUT')
                            @endisset

                            @csrf

                            <input required type="hidden" class="form-control" name="id" id="id"  value="@isset($product){{ $product->id }}@endisset">


                            <div class="input-group row">
                                <label for="name" class="col-sm-2 col-form-label">Название: </label>
                                <div class="col-sm-6">
                                    <input required type="text" class="form-control" name="name" id="name"  value="@isset($product){{ $product->name }}@endisset">
                                </div>
                            </div>
                            <br>

                            <div class="input-group row">
                                <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                                <div class="col-sm-6">
                                    <textarea required name="description" id="description" cols="58" rows="7">@isset($product){{ $product->description }}@endisset</textarea>
                                </div>
                            </div>
                            <br>

                            <div class="input-group row">
                                <label for="composition" class="col-sm-2 col-form-label">Состав: </label>
                                <div class="col-sm-6">
                                    <textarea required name="composition" id="composition" cols="58" rows="7">@isset($product){{ $product->composition }}@endisset</textarea>
                                </div>
                            </div>
                            <br>
                        

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="proteins">Белки:</label>
                                    <input required type="number" name="proteins" class="form-control" id="proteins" value="@isset($product){{ $product->proteins }}@endisset">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="fats">Жиры:</label>   
                                    <input required type="number" name="fats" class="form-control" id="fats"  value="@isset($product){{ $product->fats }}@endisset">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="carbohydrates">Углеводы:</label>
                                    <input required type="number" name="carbohydrates" class="form-control" id="carbohydrates"  value="@isset($product){{ $product->carbohydrates }}@endisset">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="energy">Энерг. ценность:</label>
                                    <input required type="number" name="energy" class="form-control" id="energy" value="@isset($product){{ $product->energy }}@endisset">
                                </div>
                            </div>
                            <br>

                            <div class="input-group row">
                                <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                                <div class="col-sm-6">
                                    <input required type="number" class="form-control" name="price" id="price" value="@isset($product){{ $product->price }}@endisset">
                                </div>
                            </div>
                            <br>
                            <p>Выберите тип товара (поставьте 1 на выбранный тип товара, иначе 0):</p>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="pizza">Пицца:</label>
                                    <input required type="number" name="pizza" class="form-control" id="pizza" value="@isset($product){{ $product->pizza }}@endisset">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="sushi">Суши:</label>   
                                    <input required type="number" name="sushi" class="form-control" id="sushi" value="@isset($product){{ $product->sushi }}@endisset">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="drink">Напиток:</label>
                                    <input required type="number" name="drink" class="form-control" id="drink" value="@isset($product){{ $product->drink }}@endisset">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="sweet">Десерт:</label>
                                    <input required type="number" name="sweet" class="form-control" id="sweet" value="@isset($product){{ $product->sweet }}@endisset">
                                </div>
                            </div>
                            <br>


                            <div class="input-group row">
                                <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                                <div class="col-sm-10" >
                                    <label class="btn btn-default btn-file" style="color:blue;">
                                        Загрузить <input type="file" style="display: none;" name="image" id="image">
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-success">Сохранить</button>
                        </div>
                </form>
                        
                </div>
            </div>
      
    </div>
</div>
@endsection