<?php $__env->startSection('content'); ?>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail">Search by name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Поиск">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Search by email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Поиск">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <hr>
        <div>
            <h2>
                Users
            </h2>
            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Кол-во Постов</th>
                    <th scope="col">Последний Пост</th>

                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td></td>
                        <td>Время последнего поста</td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <?php echo e($users->links('vendor.pagination.bootstrap-4')); ?>

    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/users.blade.php ENDPATH**/ ?>