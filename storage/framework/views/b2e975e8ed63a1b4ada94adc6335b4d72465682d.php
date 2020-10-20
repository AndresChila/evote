<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header" style="background-color: #007b3e" >
                    <a style="color: #ffffff">
                    Candidato <?php echo e($candidato); ?></div>
                    </a>
                    <div class="card-body">

                        <a href="<?php echo e(url('/votacion/'. $candidato->idvotacion)); ?>" title="Atrás"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atrás </button></a>
                        <a href="<?php echo e(url('/candidato/' . $candidato->id . '/edit')); ?>" title="Edit Candidato"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar </button></a>

                        <form method="POST" action="<?php echo e(url('candidato' . '/' . $candidato->id)); ?>" accept-charset="UTF-8" style="display:inline">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Candidato" onclick="return confirm(&quot;¿Está seguro de eliminar este registro?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td><?php echo e($candidato->id); ?></td>
                                    </tr>
                                    <tr>
                                        <th> Nombre Candidato </th>
                                        <td> <?php echo e($candidato->nombrecandidato); ?> </td>
                                    </tr>
                                    <tr>
                                        <th> Apellido Candidato </th>
                                        <td> <?php echo e($candidato->apellidocandidato); ?> </td>
                                    </tr>
                                    <tr>
                                        <th> Nombre votacion </th>
                                        <td> <?php echo e($sqln->nombrevotacion); ?> </td>
                                    </tr>
                                    <tr><th> Foto </th>
                                        <td> 
                                            <?php if(isset($candidato->foto)): ?>
                                            <br/>
                                               <img src="<?php echo e(asset('storage').'/'. $candidato->foto); ?>" alt="" width="150" class="img-thumbnail img-fluid">
                                            <br/>
                                            <?php endif; ?> 
                                        </td>
                                    </tr>
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