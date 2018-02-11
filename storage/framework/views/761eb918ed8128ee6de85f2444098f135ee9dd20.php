<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-header text-center">
        <h1 >Welcome <?php echo e($user->name); ?></h1>
    </div>
    <!--<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">DASHBOARD</div>

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
    </div> -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title pull-left" style="padding-top: 7.5px;">DETAILS</h4>
                    <div class="btn-group pull-right">
                        <a class="btn btn-success editb" href="/edit">Edit</a>
                    </div>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>COLLEGE&nbsp&nbsp&nbsp<?php echo e($user->college); ?></li>
                        <li>LEVEL&nbsp&nbsp&nbsp<?php echo e($user->level); ?> </li>
                        <li>EMAIL&nbsp&nbsp&nbsp<?php echo e($user->email); ?></li>
                        <li>MOBILE&nbsp&nbsp&nbsp<?php echo e($user->phnumber); ?></li>

                    </ul>
                </div>
                <div id="overlay animated fadeInUp"></div>

            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>