<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Categories
        </legend>
        <table>
       <thead>
        <tr>
            <th> Category Id</th>
            <th>Category Name</th>
            
            

        </tr>
       </thead>
       <tbody>
        <tr>
            <td>
              <?php echo e($category->id); ?>

            </td>
            <td>
                <?php echo e($category->name); ?>

              </td>

        </tr>

       </tbody>
        </table>
    </fieldset>



    <fieldset>
        <legend>
        Products
        </legend>
        <table>
       <thead>
        <tr>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Availability</th>

        </tr>
       </thead>
       <tbody>

        <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

            <td>
              <?php echo e($product->product_name); ?>

            </td>
            <td>
                <?php echo e($product->product_price); ?>

              </td>
              <td>
                <?php echo e($product->product_availability); ?>

              </td>

        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


       </tbody>
        </table>
    </fieldset>


</body>
</html><?php /**PATH C:\xampp\htdocs\projectiti\example-app\resources\views/category/show.blade.php ENDPATH**/ ?>