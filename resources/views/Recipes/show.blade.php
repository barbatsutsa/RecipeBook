@extends('layouts.index')
@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $recipeShow->name }}</h2>
        @if($recipeShow->created_at)
            <p class="blog-post-meta">{{ $recipeShow->created_at->format('d-m-Y H:i') }}   от <a href="#">Админ</a></p>
        @endif

        <p><img src="{{ \Storage::url($recipeShow->image) }}" style="width: 250px"></p>

        <h3 class="pb-4 mb-4 font-italic border-bottom">
            @forelse($ingredients as $ingredient)
                <p>{{$ingredient->name}} - {{$ingredient->amount}} {{$ingredient->sign}} </p>
            @endforelse
        </h3>


        <p>{!! $recipeShow->description !!}</p>

    </div><!-- /.blog-post -->
@stop

