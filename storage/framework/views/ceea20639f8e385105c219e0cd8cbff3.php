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
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->price); ?></td>
            <td><?php echo e($product->availability); ?></td>
            <td>
                
                <form action="{ route('products.showone',$product->product_id) }}"> 
                <input type="submit" value="showone">
                </form>
                <form action="{ route('products.edit',$product->product_id) }}">
                    <input type="submit" value="edit">
                </form>
                <form action="{ route('products.destroy',$product->product_id) }}" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <input type="submit" value="delete">
                </form>
                
              
                
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
    </tbody>
   </table>

</body>
</html><?php /**PATH C:\xampp\htdocs\projectiti\example-app\resources\views/product/indexx.blade.php ENDPATH**/ ?>