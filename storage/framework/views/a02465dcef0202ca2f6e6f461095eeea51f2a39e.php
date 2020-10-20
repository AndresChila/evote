<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row">
        <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header" style="background-color: #007b3e">
                    <a style="color: #ffffff"> 
                        Votaciones en curso
                    </a>
                    </div>
                    <div class="card-body">
                        <div class="table-secondary">
                            <table class="table">
                                <thead>
                                    
                                        <th>Nombre votación</th>
                                        <th>Fecha inicio</th>
                                        <th>Hora inicio</th>
                                        <th>Duración</th>
                                
                                </thead>
                                
                                <tbody>
                                    
                                    <?php $__currentLoopData = $votacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>                                              
                                            <?php echo e($item->nombrevotacion); ?>                                       
                                        </td>
                                        <td>
                                            <?php echo e($item->fechainicio); ?>

                                        </td>
                                        <td>
                                            <?php echo e($item->horainicio); ?>

                                        </td>
                                        <td>
                                            <?php echo e($item->duracion); ?> horas
                                            </td>
                                    </tr>                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>