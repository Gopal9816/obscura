<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('css/rep.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/lev2.css')); ?>" rel="stylesheet">
<div class="row  rym">

<div class="col-md-6 col-md-offset-3" align="center">
    <audio controls>
        <source src="<?php echo e(asset('audio/level2.wav')); ?>" type="audio/wav">

    </audio>
<!--</div>
<br><br>
<div class="col-md-6 col-md-offset-3 lev2" align="center">  -->      
    <?php echo Form::open(['action' => 'GameController@answer', 'method' => 'POST']); ?>

        <div class="form-group" align="center">
            <?php echo e(Form::label('answer','Answer')); ?>

            <?php echo e(Form::text('answer','',['class' => 'form-control','placeholder' => 'Your Answer'])); ?>

        </div>
    <?php echo e(Form::submit('Submit',['class' => 'btn btn-success editb'])); ?>

<?php echo Form::close(); ?>

</div>
</div>







<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>