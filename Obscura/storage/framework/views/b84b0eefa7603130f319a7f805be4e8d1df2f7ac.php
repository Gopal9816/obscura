<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-header text-center">
        <h1>Welcome <?php echo e($user->name); ?></h1>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                </div>
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Details
                </div>
                <div class="panel-body">
                    <ul>
                        <li>College : <?php echo e($user->college); ?></li>
                        <li>Level : <?php echo e($user->level); ?> </li>
                        <li>E-mail : <?php echo e($user->email); ?></li>
                        <li>Mobile : <?php echo e($user->phnumber); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>