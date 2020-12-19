@extends('layouts.index')
@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $recipe->name }}</h2>
        <h4 class="pb-4 mb-4 border-bottom"> <a href="{{ route('category', ['cat_id' => $recipe->category_id]) }}"> Категория - {{ $recipe->title }} </a></h4>

        @if($recipe->image)
            <p><img src="{{ \Storage::url($recipe->image) }}" style="width: 250px"></p>
        @endif

        <h6 class="pb-4 mb-4 font-italic border-bottom">
            @foreach($ingredients as $ingredient)
                <p>{{$ingredient->name}} - {{$ingredient->amount}} {{$ingredient->sign}} </p>
            @endforeach
        </h6>


        <p>{{ $recipe->description }}</p>

    </div><!-- /.blog-post -->
@stop

