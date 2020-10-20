
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header" style="background-color: #007B3E" >
                        <a style="color: #ffffff">
                            Resultados para la votacion <?php echo e($candidatos1[1]->nombrevotacion); ?> 
                            
                            </a>
                        </div>
                        <div class="card-header" style="background-color: #007B3E" >
                            <a style="color: #ffffff">
                                
                                Realizada el dia <?php echo e($candidatos1[1]->fechainicio); ?> a las <?php echo e($candidatos1[1]->horainicio); ?>

                                </a>
                            </div>
                        <div class="card-header" style="background-color: #ffd700" >
                                <a style="color: #000000">
                                    El candidato ganador fue: <?php echo e($ganador); ?>

                                </a>
                        </div>
                            <main class="py-4" style=".flex-center">
                                <?php $__currentLoopData = $candidatos1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                ................................................................................................................................................................................                                
                                ________________________________________________________________________________________
                                    <div class="table-responsive">
                                        <table class="table">                                            
                                            <thead>
                                                <tr>
                                                    <th>Nombre candidato</th>
                                                    <th> <a style="color: #ffffff">
                                                       ----------------------------------------
                                                    </a>< </th>
                                                    <th>votos</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo e($item->nombrecandidato); ?> <?php echo e($item->apellidocandidato); ?></td>
                                                    <td> <a style="color: #ffffff">
                                                        ----------------------------------------
                                                     </a> </td>
                                                    <td><?php echo e($item->votocand); ?></td>
                                                </tr>
                                            </tbody>
                                            ________________________________________________________________________________________
                                            <div class="table-responsive">
                                                <table class="table">                                            
                                                    <thead>
                                                        <tr>
                                                            <th>Nombre sede</th>
                                                            <th><a style="color: #ffffff">
                                                                --------------------------------------------
                                                             </a> </th>
                                                            <th>votos</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo e($item->nomlugar); ?></td>
                                                            <td> <a style="color: #ffffff">
                                                                ---------------------------------------------
                                                             </a></td>
                                                            <td><?php echo e($item->votlugar); ?></td>
                                                        </tr>
                                                    </tbody>
                                                    ________________________________________________________________________________________
                                                    <div class="table-responsive">
                                                        <table class="table">                                            
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre Carrera</th>
                                                                    <th><a style="color: #ffffff">
                                                                        ----------------------------------------
                                                                     </a>
                                                                    </th>
                                                                    <th>votos</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><?php echo e($item->nomcarrera); ?></td>
                                                                    <td><a style="color: #ffffff">
                                                                        ----------------------------------------
                                                                     </a>
                                                                    </td>
                                                                    <td><?php echo e($item->votcarrera); ?></td>
                                                                </tr>
                                                            </tbody>
                                                            
                                                        </table>                                
                                                    </div>
                                                ________________________________________________________________________________________
                                                </table>                                
                                            </div>
                                        ________________________________________________________________________________________
                                        </table>                                
                                    </div>
                                ________________________________________________________________________________________
                                ................................................................................................................................................................................
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
