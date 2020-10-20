<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php echo $__env->make('paravotar.sidebardos', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
                            <div id="piechart" style="width: 900px; height: 500px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>