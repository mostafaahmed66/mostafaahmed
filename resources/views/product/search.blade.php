<!-- resources/views/products/search.blade.php -->



<!DOCTYPE html>
<x-app-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   

    @if ($products->isEmpty())
        <p>No products found.</p>
    @else
        @foreach ($products as $product)
            <div>
                <h3>{{ $product->product_name }}</h3>
                <p>{{ $product->product_price }}</p>
                
            </div>
        @endforeach
    @endif


</body>
</x-app-layout>