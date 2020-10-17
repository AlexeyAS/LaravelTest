<?php $__env->startSection('title-block'); ?>
    Новый пост
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1>Новый пост</h1>
<p>Введите новый пост</p>

    <form action="<?php echo e(route('posting-form')); ?>" method="post" >
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="subject">Введите тему</label>
            <input type="text" name="subject" placeholder="Тема" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea type="text" name="message" placeholder="Сообщение" id="message" class="form-control">
    </textarea>
        </div>
        <button type="submit" class="btn btn-success">Ввод</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/posting-new.blade.php ENDPATH**/ ?>