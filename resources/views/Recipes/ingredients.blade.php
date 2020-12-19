@extends('layouts.app')
@section('content')
    <div class="col-md-4  offset-2">
        <h1>Добавление ингредиентов</h1><br>
        <h2 class="blog-post-title">{{ $recipe->name }}</h2>
        <h4 class="pb-4 mb-4 border-bottom"> Категория - {{ $recipe->title }} </h4>

        <form method="post" action="{{ route('ingredients.store') }}" enctype="multipart/form-data">
            @csrf
            <p>
            <legend>Необходимые ингредиенты</legend>
            @if($ingredients)
                <h6 class="pb-4 mb-4 font-italic border-bottom">
                    @foreach($ingredients as $ingredient)
                        <p>{{ $ingredient->name }} - {{ $ingredient->amount }} {{ $ingredient->sign }} </p>
                    @endforeach
                </h6>
            @endif
                <p>
                    <select name='product_id'>
                        <option disabled selected>Выберите продукт</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}"> {{ $product->name }} </option>
                        @endforeach
                    </select>
                    <select name='measure_id'>
                        <option disabled selected>Выберите ед.изм.</option>
                        @foreach($measures as $measure)
                            <option value="{{ $measure->id }}"> {{ $measure->sign }} </option>
                        @endforeach
                    </select>
                    <input type="text" name='amount' placeholder="Количество">
                    <input type="hidden" name='recipe_id'  value="{{ $recipe->id }}">
                </p>
                <button type="submit" class="btn btn-success" name="add" value="add">Добавить ингредиент</button>
            </p>
            <button type="submit" class="btn btn-success" name="save" value="save">Сохранить</button>
        </form>
    </div>
@stop

