<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('css/rep.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/lev2.css')); ?>" rel="stylesheet">
<div class="row rym">
    <div class="col-md-6 col-md-offset-3" align="center">
       <h1 id="rhyme">Congratulations on completeing Obscura!<br>Check out the leaderboard to see your final standings<br></h1>
    </div>

</div>







<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>