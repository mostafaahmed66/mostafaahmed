<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

   <table>
    <thead>
        <tr>
            <th>Product name</th>
            <th>Product price</th>
            <th>Product validation</th>
            <!-- <th>actions</th>  -->
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            
            <td>
                
                <!-- <form action="{ route('products.show',$product->product_id) }}"> 
                <input type="submit" value="showone">
                </form>
                <form action="{ route('products.edit',$product->product_id) }}">
                    <input type="submit" value="edit">
                </form>
                <form action="{ route('products.destroy',$product->product_id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete">
                </form>
                 -->
              
                
            </td>
        </tr>
        @endforeach
       
    </tbody>
   </table>

</body>
</html>