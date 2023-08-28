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
    <?php echo csrf_field(); ?>
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
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($order->id); ?></td>
            <td><?php echo e($order->price); ?></td>
            <td><?php echo e($order->user_id); ?></td>
            
            <td>
                
               
              
                
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
    </tbody>
   </table>

</body>
</html><?php /**PATH C:\xampp\htdocs\projectiti\example-app\resources\views/order/index.blade.php ENDPATH**/ ?>