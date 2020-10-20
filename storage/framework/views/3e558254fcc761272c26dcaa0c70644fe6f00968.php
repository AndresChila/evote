<?php                            
    $usuario = $_SESSION["usuario"];
    $nombre = $_SESSION["nombre"];
    $apellido = $_SESSION["apellido"];
    
?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row">
        <?php echo $__env->make('paravotar.sidebardos', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header" style="background-color: #007b3e">
                    <a style="color: #ffffff"> Bienvenido <?php echo e($nombre); ?> <?php echo e($apellido); ?> </a>
                    </div>
                    <div class="card-body">
                        <div class="table-secondary">
                            <table class="table">
                                <thead>
                                    <div class="card-header" style="background-color: #ffd700 ">
                                        Votaciones realizadas anteriores a <?php echo e($hoy); ?>

                                    </div>
                                </thead>
                                
                                <tbody>
                                    <tr>
                                        <th>Nombre votación</th>
                                        <th>Fecha </th>                                                                                
                                        <th>Ver</th>
                                    </tr>
                                    <?php $__currentLoopData = $votaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>                                              
                                            <?php echo e($item->nombrevotacion); ?>

                                            -
                                            <?php echo e($item->tipo); ?>                                       
                                    </td>
                                    <td>
                                        <?php echo e($item->fecha); ?>

                                    </td>                                    
                                    <td>                                           
                                        <a href="<?php echo e(url('paraVotar/grafico/' . $item->id)); ?>" title="Ver Votacion">
                                            <button class="btn btn-info btn-sm">
                                                <i class="fa fa-eye" aria-hidden="true">
                                                </i> 
                                                Ver resultados.
                                            </button>                                               
                                        </a>             
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
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>