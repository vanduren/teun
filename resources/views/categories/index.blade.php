@foreach ($categories as $category)
    <div>
        <a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
    </div>
@endforeach
