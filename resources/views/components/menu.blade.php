<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        @foreach(getCategories() as $category)
            <a class="p-2 text-muted" href="{{ route('category', ['cat_id' => $category->id]) }}">{{ $category->title }}</a>
        @endforeach
    </nav>
</div>

