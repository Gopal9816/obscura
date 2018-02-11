<?php $__env->startSection('content'); ?>
<div class="row leaderboard">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#away">Away</a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade in active" id="home">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">College</th>
                <th scope="col">Level</th>
                <th scope="col">Points</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($homeusers) > 0): ?>
                <?php $__currentLoopData = $homeusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->college); ?></td>
                        <td><?php echo e($user->level); ?></td>
                        <td><?php echo e($user->points); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table>
    </div>
    <div id="away" class="tab-pane fade">
            <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">College</th>
                            <th scope="col">Level</th>
                            <th scope="col">Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($awayusers) > 0): ?>
                            <?php $__currentLoopData = $awayusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->college); ?></td>
                                    <td><?php echo e($user->level); ?></td>
                                    <td><?php echo e($user->points); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                </table>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>