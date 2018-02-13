<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('css/rep.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/lev5.css')); ?>" rel="stylesheet">
<div class ="row rym animated fadeIn">
    
    <h2 id="rhyme" class="text-center">
        Drop by Drop I bleed a part of me I give away.
        <br>Look closer and you'll see, with you I've been a long way.
        <br>Trapped in Here to be immortalized what am i to say.
        <br>Life is but a dream and You can gently Row Away.
        <br>Or you can stay and find my name and join in,in my story.
        <br>And we will Find.
    </h2>
    <img src="../img/alice.jpeg" style="z-index: 4;height:40vh;">
    <br><br>
    <div class="col-md-6 col-md-offset-3" style="padding-bottom: 20px;">        
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