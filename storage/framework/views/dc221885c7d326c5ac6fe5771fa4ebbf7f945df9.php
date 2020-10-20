<?php                            
    $usuario = $_SESSION["usuario"]
?>

<div class="col-md-3">
    <div class="card">
        <div class="card-header" style="background-color: #007B3E" >
        <a style="color: #ffffff"> 
            e-vote (<?php echo e($usuario); ?>)
            </a>
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                   
                    
                    <a href="<?php echo e(url('/votacion')); ?>" style="color: #007B3E">
                        Votación
                    </a>
                    <br/>
                    <br/>
                    <a href="<?php echo e(url('/tipo-votacion')); ?>" style="color: #007B3E">
                        Tipo de Votación
                    </a>
                    <br/>
                    <br/>
                    <a href="<?php echo e(url('/graficos')); ?>" style="color: #007B3E">
                        Reportes
                    </a>
                    <br/>
                    <br/>
                    <a href="<?php echo e(route('votacion.encurso')); ?>" style="color: #007B3E">
                        Votaciones en curso
                    </a>
                    
                </li>
            </ul>
        </div>
    </div>
</div>
