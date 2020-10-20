<?php $__env->startSection('content'); ?>



    <div class="container">
        <div class="row">
            <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header" style="background-color: #007B3E" >
        <a style="color: #ffffff"> 
            Tipo Votacion
            </a>
        </div>
                    <div class="card-body">
                        <a href="<?php echo e(url('/tipo-votacion/create')); ?>" class="btn btn-success btn-sm" title="Añadir nuevo">
                            <i class="fa fa-plus" aria-hidden="true"></i> Añadir
                        </a>

                        <form method="GET" action="<?php echo e(url('/tipo-votacion')); ?>" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="<?php echo e(request('search')); ?>">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nombre tipo</th><th>Ocupacion permitida</th><th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $tipovotacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->nombretipo); ?></td><td><?php echo e($item->ocupacionpermitida); ?></td>
                                        <td>
                                            
                                            <a href="<?php echo e(url('/tipo-votacion/' . $item->id . '/edit')); ?>" title="Editar"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar </button></a>

                                            <form method="POST" action="<?php echo e(url('/tipo-votacion' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Eliminar" onclick="return confirm(&quot;¿Está seguro que desea eliminar este registro?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $tipovotacion->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>