<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <form action="/products/search" method="POST">
    @csrf
    <input type="text" name="keyword" placeholder="Search products">
    <button type="submit">Search</button>
</form> -->




   <table>
    <thead>
        <tr>
            <th>Product id</th>
            <th>Product price</th>
            <th> user_id</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->price }}</td>
            <td>{{ $order->user_id }}</td>
            
            <td>
                
               
              
                
            </td>
        </tr>
        @endforeach
       
    </tbody>
   </table>

</body>
</html>