<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create A Product</h1>
    <div>
        <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
    </div>
    <form method="POST" action="<?php echo e(route('product.store')); ?>">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('post'); ?>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter name" />
        </div>
        <div>
            <label for="qty">Quantity</label>
            <input type="number" name="qty" placeholder="Enter Quantity" />
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Enter Price" />
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" placeholder="Enter Description" />
        </div>
        <div>
            <input type="submit" value="Save Product" />
        </div>
    </form>
</body>
</html><?php /**PATH C:\Users\user\OneDrive\Desktop\Php\Application\learning\example-app\resources\views/products/create.blade.php ENDPATH**/ ?>