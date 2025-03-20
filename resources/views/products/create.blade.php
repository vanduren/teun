<form action="{{ route('products.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="description" placeholder="Description">
    <input type="text" name="price" placeholder="Price">
    <input type="submit" value="Maak product">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    @endif

</form>
