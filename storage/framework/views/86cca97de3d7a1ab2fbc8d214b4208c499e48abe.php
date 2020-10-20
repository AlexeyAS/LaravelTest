<div class="jumbotron">
    <div class="container">
        <h1>Последние посты</h1>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop->first): ?>
                <div class="carousel-item active">
                    <h6><?php echo e($element->name); ?></h6>
                    <h5><?php echo e($element->message); ?></h5>
                    <p><?php echo e($element->created_at); ?></p>
                </div>
                    <?php else: ?>
                    <div class="carousel-item">
                        <h6><?php echo e($element->name); ?></h6>
                        <h5><?php echo e($element->message); ?></h5>
                        <p><?php echo e($element->created_at); ?></p>
                    </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/includes/hero.blade.php ENDPATH**/ ?>