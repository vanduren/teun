<h2>{{ $category->name }}</h2>

<div>
    <a href="{{ route('categories.edit', $category) }}">Edit</a>
</div>


@foreach ($category->products as $product)
    <div>
        <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
    </div>
@endforeach
