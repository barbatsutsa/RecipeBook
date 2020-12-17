@extends('layouts.index')
@section('content')

    @if(session()->has('success'))
        <strong>{{ session()->get('success') }}</strong>
        <hr>
    @endif

    @forelse($recipesList as $recipes)
        <div class="blog-post">
            <h2 class="blog-post-title"><a href="{{ route('recipe', ['id' => $recipes->id]) }}">{{ $recipes->name }}</a></h2>
            @if($recipes->created_at)
                <p class="blog-post-meta">{{ $recipes->created_at }}  </p>
            @endif
            <p>{!! mb_substr($recipes->description, 0, 200) !!}</p>
        </div><!-- /.blog-post -->
    @empty
        <h2>Рецептов нет</h2>
    @endforelse



@stop
