<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('css/rep.css')); ?>" rel="stylesheet">
<div class ="row rym animated fadeIn">
        <h1 id="rhyme-new" >OH DO!</h1>
        <h1 id="rhyme-new" >INDULGE an IDIOSYNCRASY</h1>
        <h1 id="rhyme-new" >make BULLETS of LEAD</h1>
        <h1 id="rhyme-new" >Reconcile DOG to CAT</h1>
        <h1 id="rhyme-new" >Lay KNIFE by FORK</h1>
        <h1 id="rhyme-new" >CONVERSE CHEERFULLY</h1>
        <h1 id="rhyme-new" >WEDNESDAY AFTERNOON</h1>
        <h1 id="rhyme-new" >COOK the DINNER</h1>
        <h1 id="rhyme-new" >SPREAD the BANQUET</h1>
        <h1 id="rhyme-new" >DEMAND a CORMORANT</h1>
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