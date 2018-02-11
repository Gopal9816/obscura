<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="jumbotron text-center">
        <a href="https://www.facebook.com/dotslashcet" target="_blank"><img src="../img/dslogo.png" class="img-responsive dotlogo"></a><br>
            <h6 style="color:white; letter-spacing: 5px;">PRESENTS</h6>
            <h1 align="center" id="obtitle">Obscura</h1>
            <br>
            <?php if(auth()->guard()->guest()): ?>
            <p>
                <a href="/login/google" style="color:white;"><button id="google" class=btn><i class="fa fa-google">  Google</i></button></a>
                <a href="/login/facebook" style="color:white;"><button id="facebook" class=btn><i class="fa fa-facebook">  Facebook</i></button></a>
            </p>
            <?php else: ?>
            <p style="color:white;">
                <a href="/game" style="font-family:dae"><h2>The game has begun</h2></a> 
            </p>
            <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>