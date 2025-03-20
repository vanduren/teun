<form action="{{ route('products.update', $product) }}" method="post">
    @csrf
    @method('put')
    <h1>Product wijzigen</h1>
    <input type="text" name="name" value="{{ $product->name }}"><br>
    <input type="text" name="description" value="{{ $product->description }}"><br>
    <input type="text" name="price" value="{{ $product->price }}"><br>
    <input type="submit" value="Product wijzigen">
</form>
