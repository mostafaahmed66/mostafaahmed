<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('product.edit',$product->product_id)}}" method="PUT">
        @csrf
        @method('PUT')
        <input type="text" name="product_name" placeholder="Product name">
        @error('product_name')
        <div class=" alert-danger">
            {{$message}}
        </div>
        @enderror
        <input type="text" name="product_price" placeholder="product price">
        @error('product_price')
        <div class="alert-danger">
            {{$message}}
        </div>
        @enderror
        <input type="text" name="product_availability" placeholder="product availability">
        @error('product_availability')
        <span   class="alert-danger">
            {{$message}}
        </span>
        @enderror
        <input type="text" name="category_id" placeholder="category id">
        @error('category_id')
        <div class=" alert-danger">
            {{$message}}
        </div>
        @enderror
        <input type="text" name="admin_id" placeholder="admin id">
        @error('admin_id')
        <div class=" alert-danger">
            {{$message}}
        </div>
        @enderror
        <input type="submit" >

    </form>
</body>
</html>