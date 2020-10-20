<?php $__env->startSection('title-block'); ?><?php echo e($data->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($data->name); ?></h1>
        <div class="alert alert-info">
            <h3><?php echo e($data->subject); ?></h3>
            <p><?php echo e($data->message); ?></p>
            <p><?php echo e($data->email); ?></p>
            <p><small><?php echo e($data->created_at); ?></small></p>
            <a href="<?php echo e(route('posting-update', $data->id)); ?>"><button class="btn btn-warning">Редактировать</button></a>
            <a href="<?php echo e(route('posting-delete', $data->id)); ?>"><button class="btn btn-danger">Удалить</button></a>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/posting-one.blade.php ENDPATH**/ ?>