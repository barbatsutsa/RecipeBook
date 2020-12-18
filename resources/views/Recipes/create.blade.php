@extends('layouts.app')
@section('content')
    <div class="col-md-4  offset-2">
        <h1>Добавить рецепт</h1><br>
        <form method="post" action="{{ route('recipes.store') }}" enctype="multipart/form-data">
            @csrf
            <p><input type="text" class="form-control" name="name" placeholder="Название" value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger">
                        @foreach($errors->get('name') as $error)
                            <p>{{ $error }} </p>
                        @endforeach
                    </div>
                @enderror
            </p>
    <p><input type="hidden" name="user_id"  value="1"></p>
            <p><input type="file" class="form-control" name="image" placeholder="Фото" value="{{ old('image') }}">
                @error('image')
                    <div class="alert alert-danger">
                        @foreach($errors->get('image') as $error)
                            <p>{{ $error }} </p>
                        @endforeach
                    </div>
                @enderror
            </p>

            <p> <select class="form-control" name="category_id">
                    <option disabled selected>Выберите категорию рецепта</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"> {{ $category->title }} </option>
                    @endforeach
                </select>
                @error('category')
                    <div class="alert alert-danger">
                        @foreach($errors->get('category') as $error)
                            <p>{{ $error }} </p>
                        @endforeach
                    </div>
                @enderror
            </p>

            <p> Кому показывать рецепт: <br>
                <input type="radio" name="show" value="1" checked> только мне<br>
                <input type="radio" name="show" value="0"> всем
                @error('show')
                    <div class="alert alert-danger">
                        @foreach($errors->get('show') as $error)
                            <p>{{ $error }} </p>
                        @endforeach
                    </div>
                @enderror
            </p>

            <p>
                <legend>Порядок приготовления:</legend>
            </p>
            <p><textarea class="form-control" rows="10" name="description" id="description" placeholder="Текст">{!! old('description') !!}</textarea>
                @error('description')
                    <div class="alert alert-danger">
                        @foreach($errors->get('description') as $error)
                            <p>{{ $error }} </p>
                        @endforeach
                    </div>
                @enderror
            </p>

            <button type="submit" class="btn btn-success">Добавить продукты</button>
        </form>
    </div>
@stop
