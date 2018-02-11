<?php $__env->startSection('content'); ?>

<!--<div class="page-header text-center">
    <h1>Welcome <?php echo e($user->name); ?></h1>
</div> -->
<link href="<?php echo e(asset('css/lev1.css')); ?>" rel="stylesheet">
<div class="row rym">
    <div class="col-md-1 col-xs-1"></div>
    <div class="col-md-10 col-xs-10  animated fadeIn">
        <h2 id="rhyme" class="text-center">
            You take the blue pill, the story ends.<br>
            You wake up in your bed and believe what you want to believe.<br>
            You take the red pill, you stay in Wonderland,<br>
            and I show you how deep the rabbit hole goes.
        </h2>
    </div>
    <div class="col-md-1 col-xs-1"></div>
</div>
<div class="row" >
    <div class="col-md-6 col-xs-6 hand" align="center">
        <a href="/game/red">
            <!--<img src="<?php echo e(asset('img/p1.png')); ?>" class="img-responsive">-->
            
            <img src="../img/redh.svg" class="lefth">
        </a> 
    </div>
    <div class="col-md-6 col-xs-6 hand" align="center">
        <a href="/game/blue">
            <!--<img src="<?php echo e(asset('img/p2.png')); ?>" class="img-responsive" >-->
           
            <img src="../img/blueh.svg" class="lefth" id="lefth" >
        </a> 
    </div>

</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>