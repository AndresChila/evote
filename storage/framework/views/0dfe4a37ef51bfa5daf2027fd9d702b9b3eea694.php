
<div class="form-group <?php echo e($errors->has('nombrevotacion') ? 'has-error' : ''); ?>">
    <label for="nombrevotacion" class="control-label"><?php echo e('Nombre Votación'); ?></label>
    <input class="form-control" name="nombrevotacion" type="text" id="nombrevotacion" value="<?php echo e(isset($votacion->nombrevotacion) ? $votacion->nombrevotacion : ''); ?>" >
    <?php echo $errors->first('nombrevotacion', '<p class="alert alert-danger">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('tiposVotaciones') ? 'has-error' : ''); ?>">
    <label for="idvotacion" class="control-label">Tipo de votación </label>
    <select name="tipovotacion" class="form-control" id="tipovotacion" >    
        <option value=""> --seleccione una opcion-- </option>
        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </select>
    <?php echo $errors->first('tipovotacion', '<p class="alert alert-danger">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('fechainicio') ? 'has-error' : ''); ?>">
    <label for="fechainicio" class="control-label"><?php echo e('Fecha inicio'); ?></label>
    
    <input class="date form-control" type="text" name="fechainicio" id="fechainicio">
    <?php echo $errors->first('fechainicio', '<p class="alert alert-danger">:message</p>'); ?>

</div>
<div class="form-group">
    <label for="horainicio" class="control-label"><?php echo e('Hora inicio'); ?></label>
    <br/>
    <input class="time form-control" type="time" name="horainicio" id="horainicio"> </input>
</div>
<div class="form-group <?php echo e($errors->has('duracion') ? 'has-error' : ''); ?>">
    <label for="duracion" class="control-label"><?php echo e('Duración'); ?></label>
    
    <select class="form-control" name="duracion" id="duracion" value="<?php echo e(isset($votacion->duracion) ? $votacion->duracion : ''); ?>" >
        <option value="">-Duracion-</option>
        <?php for($i=1;$i<=12;$i++): ?>{
            <option value=<?php echo e($i); ?>><?php echo e($i); ?></option>
        }<?php endfor; ?>
    </select>
    <?php echo $errors->first('duracion', '<p class="alert alert-danger">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Actualizar' : 'Crear'); ?>">
</div>

