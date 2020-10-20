<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
        <?php echo $__env->make('paraVotar.sidebardos', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header" style="background-color: #007b3e" >
                <a style="color: #ffffff">voto registrado</a>
                </div>
                <div class="card-body">
                    hora:
                    </br>
                     <?php echo e(date('h:i:s d-m-Y ')); ?>

                </div>
            </div>
        </div>
    </div>    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>