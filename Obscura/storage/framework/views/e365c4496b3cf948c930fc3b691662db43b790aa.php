<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="jumbotron text-center">
            <h1 class="display-4 animate-pop-in" align="center">OBSCURA</h1>
            <br><br><br>
            <?php if(auth()->guard()->guest()): ?>
            <p>
                <a href="/login/google"><button id="google" class=btn>Sign In With Google</button></a>
                <a href="/login/facebook"><button id="facebook" class=btn>Sign In With Facebook</button></a>
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