<? <?php
    $_SESSION["idvotacion"] = $votacion->id;
?>
?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header" style="background-color: #007b3e" >
                        <a style="color: #ffffff"> 
                            Votacion <?php echo e($votacion->id); ?>

                        </a>
                    </div>
                    <div class="card-body" id="div1">
                        <a href="<?php echo e(url('/votacion')); ?>" title="Atrás"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atrás</button></a>
                        <a href="<?php echo e(url('/votacion/' . $votacion->id . '/edit')); ?>" title="Editar Votacion"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        <form id="form1" method="POST" action="<?php echo e(url('votacion' . '/' . $votacion->id)); ?>" accept-charset="UTF-8" style="display:inline">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <button type="submit" class="btn btn-danger btn-sm" title="Borrar Votacion" onclick="return confirm(&quot;¿Está seguro de eliminar este registro?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                        </form>
                        
                        <br/>
                        <br/>
                    </div>
                    <div class="card-body" id="div2">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($votacion->id); ?></td>
                                    </tr>
                                    <tr>
                                        <th> Nombre votación </th>
                                        <td> <?php echo e($votacion->nombrevotacion); ?> </td>
                                    </tr>
                                    <tr>
                                        <th> Tipo de votación </th>
                                        <td> <?php echo e($sqln->nombretipo); ?> </td>
                                    </tr>
                                    <tr>
                                        <th> Fecha inicio </th>
                                        <td> <?php echo e($votacion->fechainicio); ?> </td>
                                    </tr>
                                    <tr>
                                        <th> Hora inicio </th>
                                        <td> <?php echo e($votacion->horainicio); ?> </td>
                                    </tr>
                                        <th> Duración </th>
                                        <td> <?php echo e($votacion->duracion); ?> horas</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>            
                        <div class="card">
                            <div class="card-header" style="background-color: #007b3e" >
                                <a style="color: #ffffff"> 
                                   Candidatos de esta votación <?php echo e($votacion->id); ?>

                                </a>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <a href="<?php echo e(url('/candidato/create')); ?>" class="btn btn-success btn-sm" title="Agregar Candidato">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Agregar Candidato
                                </a>
                            </div>         
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nombre Candidato</th><th>Apellido Candidato</th><th>Foto</th><th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $candidato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->nombrecandidato); ?></td>
                                        <td><?php echo e($item->apellidocandidato); ?></td>                                        
                                        <td> 
                                            <?php if(isset($item->foto)): ?>
                                            <br/>
                                               <img src="<?php echo e(asset('storage').'/'. $item->foto); ?>" alt="" width="150" class="img-thumbnail img-fluid">
                                            <br/>
                                            <?php endif; ?> 
                                        </td>
                                        <td>
                                            <a href="<?php echo e(url('/candidato/' . $item->id)); ?>" title="Ver Candidato"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="<?php echo e(url('/candidato/' . $item->id . '/edit')); ?>" title="Editar Candidato"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form id="form2" method="POST" action="<?php echo e(url('/candidato' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Candidato" onclick="return confirm(&quot;¿Está seguro de eliminar este registro?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar </button>
                                            </form>
                                        </td>                                        
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"><?php echo $candidato->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>
                    </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>