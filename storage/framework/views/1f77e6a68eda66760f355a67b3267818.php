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
            <th>Actions</th>
        </tr>
       </thead>
       <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
              <?php echo e($category->id); ?>

            </td>
            <td>
                <?php echo e($category->name); ?>

              </td>
              <td>
                <form action="<?php echo e(route('category.show',$category->id)); ?>">

                    <Button> View</Button>
                </form>
            </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       </tbody>
        </table>
    </fieldset>


</body>
</html><?php /**PATH C:\xampp\htdocs\projectiti\example-app\resources\views/category/index.blade.php ENDPATH**/ ?>