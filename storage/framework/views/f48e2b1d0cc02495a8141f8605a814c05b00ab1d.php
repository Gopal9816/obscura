<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="jumbotron text-center">
            <h1 align="center" id="obtitle">Obscura</h1>
            <br>
            <?php if(auth()->guard()->guest()): ?>
            <p>
                <a href="/login/google" style="color:white;"><button id="google" class=btn><i class="fa fa-google">  Google</i></button></a>
                <a href="/login/facebook" style="color:white;"><button id="facebook" class=btn><i class="fa fa-facebook">  Facebook</i></button></a>
            </p>
            <?php else: ?>
            <p>
                The game begins soon!!
            </p>
            <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>