<h2>{{ $product->name }}</h2>
<h3>{{ $product->description }}</h3>
<h3>{{ $product->price }}</h3>
<h2>gekoppelde categorieen</h2>
<form action="">
    <select name="" id="">
        @foreach($product->categories as $category)
            <option>{{ $category->name }}</option>
        @endforeach
    </select>
</form>

<hr>
<form action="{{ @route('add-category', $product) }}" method="POST">
    @csrf
    @method('PUT')
    <select name="category_id" id="category_id">
        @foreach($all_categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <input type="submit" value="Voeg categorie toe">
</form>
<a href="{{ route('products.index') }}">Terug</a><br>
<a href="{{ route('products.edit', $product) }}">Wijzig</a><br>
<form action="{{ route('products.destroy', $product) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Verwijder</button>
</form>
