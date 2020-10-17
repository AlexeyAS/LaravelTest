<?php $__env->startSection('title-block'); ?> Сообщения пользователя
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Сообщения пользователя</h1>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-info">
            <p><?php echo e($element->name); ?></p>
            <h3><?php echo e($element->subject); ?></h3>
            <p><small><?php echo e($element->created_at); ?></small></p>
            <a href="<?php echo e(route('posting-data-one', $element->id)); ?>"><button class="btn btn-warning">Детали</button></a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/posting.blade.php ENDPATH**/ ?>