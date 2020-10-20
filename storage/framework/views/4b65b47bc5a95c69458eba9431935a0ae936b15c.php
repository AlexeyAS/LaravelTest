<?php $__env->startSection('title-block'); ?>
    Обновление Поста
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1>Обновление Поста</h1>

    <form action="<?php echo e(route('posting-update-submit', $data->id)); ?>" method="post" >
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="subject">Введите тему</label>
            <input type="text" name="subject" placeholder="Тема" id="subject" class="form-control" value="<?php echo e($data->subject); ?>">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea type="text" name="message" placeholder="Сообщение" id="message" class="form-control"><?php echo e($data->message); ?>

    </textarea>
        </div>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/posting-update.blade.php ENDPATH**/ ?>