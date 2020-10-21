<?php $__env->startSection('title-block'); ?> Сообщения всех пользователей
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1 style="text-align: center">Сообщения всех пользователей</h1>

    <form>
        <div class="form-group">
            <label for="exampleInputEmail">Search by name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Поиск" value="<?php echo e($request->name); ?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Search by text</label>
            <input type="text" name="text" class="form-control" id="text" placeholder="Поиск" value="<?php echo e($request->text); ?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <br>

    <?php $__currentLoopData = $postings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-info">

            <h3><?php echo e($posting->subject); ?></h3>
            <p><?php echo e($posting->message); ?></p>
                <br>
                <small><?php echo e($posting->created_at); ?></small>
                <br>
            <small><?php echo e($posting->name); ?></small>
            <br>
            <small><?php echo e($posting->email); ?></small>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/postings.blade.php ENDPATH**/ ?>