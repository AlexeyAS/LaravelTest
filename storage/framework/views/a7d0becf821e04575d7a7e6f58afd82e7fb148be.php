<?php $__env->startSection('title-block'); ?>
    Главная
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <h1>Main Front Content</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
        a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
        of Lorem Ipsum.</p>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('aside'); ?>
    <?php if(auth()->guard()->check()): ?>
    ##parent-placeholder-b77cad1467608c98b4675073084c13ea3aba2ffb##
    <a class="btn btn-danger p-2 text-dark" href="<?php echo e(route('send')); ?>">Отправить спам на почту</a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/main.blade.php ENDPATH**/ ?>