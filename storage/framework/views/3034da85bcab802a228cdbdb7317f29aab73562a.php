<?php $__env->startSection('content'); ?>
<style>
  
</style>
<h1 id="heading">Register New</h1>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
        

        <?php echo Form::open(['route' => ['register',$id], 'method' => 'POST']); ?>

            <div class="form-group">
                <?php echo e(Form::label('phno','Phone Number')); ?>

                <?php echo e(Form::text('phno','',['class' => 'form-control','placeholder' => 'Phone Number','required'])); ?>

            </div>
           
            <div class="form-group">
                
                <?php echo e(Form::radio('college','home',false, ['id' => 'home' , 'onchange' => 'hideother()','required'])); ?>Home <br>
                <?php echo e(Form::radio('college','others',false, ['id' => 'other' , 'onchange' => 'displayother()','required'])); ?>Others
            </div>
            <div class="form-group">
                <?php echo e(Form::label('collegename','College Name')); ?>

                <?php echo e(Form::text('collegename','',['class' => 'form-control','placeholder' => 'College', 'id' => 'inputother'])); ?>

            </div>
            
            <?php echo e(Form::submit('Submit',['class' => 'btn btn-success'])); ?>

        <?php echo Form::close(); ?>

        </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>