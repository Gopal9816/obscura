<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('css/rep.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/lev2.css')); ?>" rel="stylesheet">
<div class="row rym">
    <div class="col-md-6 col-md-offset-3" align="center" id="getmore">
       <h1> <a onclick="myFunc()" >More </a>levels to come Soon!!!<br>
        Stay Tuned</h1>
    </div>
    <div id="ans" style="display:none;">
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

</div>
<script>
    function myFunc() {
        var x = document.getElementById("ans");
        var y = document.getElementById("getmore");
        x.style.display = "block";
        y.style.display = "none";
    } 
</script>
<!-- Looking for a clue are you? -->
<!-- Well your efforts have been rewarded. -->
<!-- Here you go -->
<!-- hbovuntcam --> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>