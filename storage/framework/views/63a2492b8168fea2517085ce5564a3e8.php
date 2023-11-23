<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Index </h1>
    <div>
        <table border="1">
            <tr>
                <th>Id </th>
                <th>Name </th>
                <th>Quantity </th>
                <th>Price</th>
                <th>Description</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <td><?php echo e($product->id); ?></td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->qty); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td><?php echo e($product->description); ?></td>
                <td><a href="/product/edit/<?php echo e($product->id); ?>">Edit</a></td>
                <td><a href="/product/<?php echo e($product->id); ?>">Delete</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</body>
</html><?php /**PATH C:\Users\user\OneDrive\Desktop\Php\Application\learning\example-app\resources\views/products/index.blade.php ENDPATH**/ ?>