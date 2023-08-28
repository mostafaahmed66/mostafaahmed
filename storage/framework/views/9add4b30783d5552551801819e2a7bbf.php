<!DOCTYPE html>
<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <head>
    <title>Document</title>
</head>
<body>

 
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div> <form action="/products/search" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="keyword" placeholder="Search products">
    <button type="submit">Search</button>
</form>


<!-- <h1><?php echo e(Auth::user()->name); ?></h1> -->

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
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($product->product_name); ?></td>
            <td><?php echo e($product->product_price); ?></td>
            <td><?php echo e($product->product_availability); ?></td>
            
            
            <td>
    <a href="<?php echo e(route('product.addToCart', $product->product_id)); ?>"  role="button">Add to cart</a> 

<!--                 
                <form action="<?php echo e(route('product.show',$product->product_id)); ?>"> 
                <input type="submit" value="showone">
                </form>
               
                 <form action="<?php echo e(route('product.edit',$product->product_id)); ?>">
                    <input type="submit" value="edit">
                </form>
                <form action="<?php echo e(route('product.delete',$product->product_id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <input type="submit" value="delete">
                </form> -->
                
              
                
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
    </tbody>
   </table>
</div>
                
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\projectiti\example-app\resources\views/product/index.blade.php ENDPATH**/ ?>