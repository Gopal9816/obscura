<?php $__env->startSection('content'); ?>

<link href="<?php echo e(asset('css/rep.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/lev3.css')); ?>" rel="stylesheet">
<div class ="row rym animated fadeIn">
    
    <img src="../img/wrong.jpeg" class="img-responsive" style="z-index: 4; height:75vh;">
    <br><br>
</div>
<script>
    window.setTimeout(function(){ window.location = "/game"; },5000);
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>