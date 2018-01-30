<?php $__env->startSection('content'); ?>
<h1>Register New</h1>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <?php echo Form::open(['route' => ['register',$id], 'method' => 'POST']); ?>

            <div class="form-group">
                <?php echo e(Form::label('college','College')); ?>

                <?php echo e(Form::text('college','',['class' => 'form-control','placeholder' => 'College'])); ?>

            </div>
            <div class="form-group">
                    <?php echo e(Form::label('phno','Phone Number')); ?>

                    <?php echo e(Form::text('phno','',['class' => 'form-control','placeholder' => 'Phone Number'])); ?>

            </div>
            <?php echo e(Form::submit('Submit',['class' => 'btn btn-success'])); ?>

        <?php echo Form::close(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>