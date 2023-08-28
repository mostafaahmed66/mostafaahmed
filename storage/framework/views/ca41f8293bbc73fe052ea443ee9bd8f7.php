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
    <title>my product</title>
</head>
<body>

   

<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
          
            <th style="width:8%">Quantity</th>
        
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        <?php $total = 0 ?>
        <?php if(session('cart')): ?>
            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- <?php $total += $details['price'] * $details['quantity'] ?> -->
                <tr data-id="<?php echo e($id); ?>">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4 class="nomargin" style="color: white;"><?php echo e($details['product_name']); ?></h4>
                            </div>
                        </div>
                    </td>
                   
                    <td data-th="Quantity">
                        <input type="number" value="<?php echo e($details['quantity']); ?>" class="form-control quantity cart_update" min="1" />
                    </td>
                    <td>
                    
                    </td>
                   
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
    
    
</table>




</body>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\projectiti\example-app\resources\views/cart.blade.php ENDPATH**/ ?>