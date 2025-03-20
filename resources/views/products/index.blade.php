<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Producten lijst:</h1>
    @foreach ($products as $product)
        <h2><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></h2>
        <p>{{ $product->description }}</p>
        <p>&euro; {{ $product->price/100 }}</p>
    @endforeach
</body>
</html>
