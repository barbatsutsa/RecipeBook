@extends('layouts.index')
@section('content')
    <h3 class="pb-4 mb-4 font-italic border-bottom">
        Свежие рецепты
    </h3>
    @if(session()->has('success'))
        <strong>{{ session()->get('success') }}</strong>
        <hr>
    @endif

    @forelse($recipesList as $recipes)
        <div class="blog-post">
            <h2 class="blog-post-title"><a href="{{ route('recipe', ['id' => $recipes->id]) }}">{{ $recipes->name }}</a></h2>
            @if($recipes->created_at)
                <p class="blog-post-meta">{{ $recipes->created_at->format('d-m-Y H:i') }}  </p>
            @endif
            <p>{!! mb_substr($recipes->description, 0, 200) !!}</p>
        </div><!-- /.blog-post -->
    @empty
        <h2>Рецептов нет</h2>
    @endforelse


    <nav class="blog-pagination">
        {{ $recipesList->links() }}
    </nav>
@stop
