<?php $__env->startSection('content'); ?>

<?php echo e($nuevahora); ?>

<div class="container">
        <div class="row">
        <?php echo $__env->make('paravotar.sidebardos', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header" style="background-color: #007b3e">
                    <a style="color: #ffffff">Registre su voto. </a>
                    </div>
                    <div id="countdown" class="form-control" style="background-color: #ffd700">
                        Cargando...
                        <script>         
                            var end = new Date ('<?=$nuevahora?>');//mes-dia-anio
                                var _second = 1000;
                                var _minute = _second * 60;
                                var _hour = _minute * 60;
                                var _day = _hour * 24;
                                var _label = "Tiempo restante: ";
                                var timer;
                                function showRemaining() {
                                    var now = new Date();
                                    var distance = end - now;
                                    if (distance < 0) {                            
                                        clearInterval(timer);
                                        document.getElementById('countdown').innerHTML = 'SE ACABO EL TIEMPO!';                                        
                                        divd.style = "display:none";
                                        return;
                                    }         
                                    
                                    var days = Math.floor(distance / _day);
                                    var hours = Math.floor((distance % _day) / _hour);
                                    var minutes = Math.floor((distance % _hour) / _minute);
                                    var seconds = Math.floor((distance % _minute) / _second);
                                    document.getElementById('countdown').innerHTML = _label;
                                    document.getElementById('countdown').innerHTML += days + ' dias, ';
                                    document.getElementById('countdown').innerHTML += hours + ' horas, ';
                                    document.getElementById('countdown').innerHTML += minutes + ' minutos y ';
                                    document.getElementById('countdown').innerHTML += seconds + ' segundos';
                                    
                                }
                                
                                timer = setInterval(showRemaining, 1000);
                            </script>                
                        </div>
                        
                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                        <!-- Include all compiled plugins (below), or include individual files as needed -->
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>                                               

                        
                    <?php if($sql != null ): ?>
                        <div id="divd"  name="divd" class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <?php $__currentLoopData = $sql; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <th>
                                            <label value="<?php echo e($candidato->id); ?>"> <?php echo e($candidato->nombrecandidato); ?> </label> 
                                        </th>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $__currentLoopData = $sql; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                        <td>
                                        <img src="<?php echo e(asset('storage').'/'. $candidato->foto); ?>" alt="" width="150" class="img-thumbnail img-fluid">
                                        </td>
                                        <br/>
                                        <br/>
                                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                    </tr>
                                    <tr>
                                        <?php $__currentLoopData = $sql; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                            <td>
                                                <a href="<?php echo e(url('/paraVotar/show/' . $candidato->id)); ?>" title="Votar"><button id="buttoncito" class="btn btn-warning btn-sm"><i class="fa fa-arrow-up" aria-hidden="true"></i> Votar</button></a>                                           
                                            </td>                                        
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                    </tr>                                    
                                </tbody>
                            </table>                            
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>