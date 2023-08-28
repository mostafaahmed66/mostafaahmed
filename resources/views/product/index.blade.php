<!DOCTYPE html>
<x-app-layout>
    <head>
    <title>Document</title>
</head>
<body>

 
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div> <form action="/products/search" method="POST">
    @csrf
    <input type="text" name="keyword" placeholder="Search products">
    <button type="submit">Search</button>
</form>


<!-- <h1>{{ Auth::user()->name }}</h1> -->

   <table>
    <thead>
        <tr>
            <th>Product name</th>
            <th>Product price</th>
            <th>Product availability</th>
            <!-- <th>actions</th>  -->
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->product_price }}</td>
            <td>{{ $product->product_availability }}</td>
            
            
            <td>
    <a href="{{ route('product.addToCart', $product->product_id) }}"  role="button">Add to cart</a> 

<!--                 
                <form action="{{ route('product.show',$product->product_id) }}"> 
                <input type="submit" value="showone">
                </form>
               
                 <form action="{{ route('product.edit',$product->product_id) }}">
                    <input type="submit" value="edit">
                </form>
                <form action="{{ route('product.delete',$product->product_id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete">
                </form> -->
                
              
                
            </td>
        </tr>
        @endforeach
       
    </tbody>
   </table>
</div>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>