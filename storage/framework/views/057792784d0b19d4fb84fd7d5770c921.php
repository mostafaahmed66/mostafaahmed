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
            <th>Product availability</th>
            <!-- <th>actions</th> -->
        </tr>
    </thead>
    <tbody>
      
        <tr>
            <td><?php echo e($product->product_name); ?></td>
            <td><?php echo e($product->product_price); ?></td>
            <td><?php echo e($product->product_availability); ?></td>
           
        </tr>
       
    </tbody>
   </table>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\projectiti\example-app\resources\views/product/show.blade.php ENDPATH**/ ?>