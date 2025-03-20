<h2>{{ $product->name }}</h2>
<h3>{{ $product->description }}</h3>
<h3>{{ $product->price }}</h3>
<h3>category: {{ $product->category->name }}</h3>

<a href="{{ route('products.index') }}">Terug</a><br>
<a href="{{ route('products.edit', $product) }}">Wijzig</a><br>
<form action="{{ route('products.destroy', $product) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Verwijder</button>
</form>
