<?php $__env->startSection('content'); ?>

<div class="row editcont" >
    <div class="col-md-10 col-xs-12 col-md-offset-1 ">

    <?php echo Form::open(['action' => ['HomeController@update',$user->id], 'method' => 'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('name','Name')); ?>

            <?php echo e(Form::text('name',$user->name,['class' => 'form-control','placeholder' => 'Name'])); ?>

        </div>
        <div class="form-group">
                <?php echo e(Form::label('phno','Phone Number')); ?>

                <?php echo e(Form::text('phno',$user->phnumber,['class' => 'form-control','placeholder' => 'Phone Number',])); ?>

        </div>
        
        <div class="form-group">
                <?php echo e(Form::label('college','College')); ?>

                <?php echo e(Form::text('college',$user->college,['class' => 'form-control','placeholder' => 'College',])); ?>

        </div>
        <?php echo e(Form::submit('Submit',['class' => 'btn btn-success editb'])); ?>

    <?php echo Form::close(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>