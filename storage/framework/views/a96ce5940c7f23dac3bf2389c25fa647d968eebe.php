<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header" style="background-color: #007B3E" >
                    <a style="color: #ffffff">
                        Resultados
                        </a>
                    </div>
                    <div class="card-header" style="background-color: #ffd700" >
                            <a style="color: #000000">
                                El candidato ganador fue: <?php echo e($candmayor); ?>

                            </a>
                        </div>
                        

                        

                        <form method="POST" action="<?php echo e(url('/graficos')); ?>" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <label  class="control-label"><?php echo e('Filtrar por:'); ?></label>
                            </br>
                            <label for="cand" class="control-label"><?php echo e('Candidato: '); ?></label>
                            </br>
                            <select class="form-control" id ="cand" name="cand" >
                                <?php $__currentLoopData = $candidatos1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>" ><?php echo e($item->nombrecandidato); ?></option> 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            </br>
                            <label for="select" class="control-label"><?php echo e('Tipo de filtro por: '); ?></label>
                            <select class="form-control" id ="select" name="select" >
                                <option value="1" >Totales</option> 
                                <option value="2" >Por sede</option>
                                <option value="3" >Por carrera</option>
                            </select>
                            </br>
                            <div class="form-group">
                                <input class="form-control" type="submit" value="Buscar">
                            </div>
                        </form>
                        <?php if(sizeof($candidatos)>=1): ?>
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                                google.charts.load('current', {'packages':['corechart']});
                                google.charts.setOnLoadCallback(drawChart);
                                function drawChart(){
                                    var data = google.visualization.arrayToDataTable([
                                        ['votos', 'cantidad'],
                                        <?php $__currentLoopData = $candidatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            ['<?php echo e($item->nombrecandidato); ?>', <?php echo e($item->numvotos); ?>],
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                    
                                    ]);
                                    var options = {
                                        title:'Grafico de resultados'
                                    };
                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                    chart.draw(data,options);
                                }
                            </script>                   
                            <?php
                                $_SESSION["reportes"] = $candidatos;
                            ?>
                            <div id="piechart" style="width: 900px; height: 500px;"></div>
                        
                            <div>
                                <a href="<?php echo e(route('pdf.vista')); ?>" class="btn btn-sm btn-primary">
                                    Descargar reporte en PDF
                                </a>
                            </div>
                        <?php else: ?>
                            <div>
                               No hay datos para mostrar con este filtro
                            </div>  
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>