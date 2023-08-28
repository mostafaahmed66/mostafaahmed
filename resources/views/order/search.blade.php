
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   

    @if ($orders->isEmpty())
        <p>No orders found.</p>
    @else
        @foreach ($orders as $order)
            <div>
                <h3>{{ $order->id }}</h3>
                <p>{{ $order->price }}</p>
                
            </div>
        @endforeach
    @endif


</body>
</html>