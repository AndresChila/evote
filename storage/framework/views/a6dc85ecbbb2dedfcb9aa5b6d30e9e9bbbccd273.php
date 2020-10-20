<div class="form-group <?php echo e($errors->has('nombretipo') ? 'has-error' : ''); ?>">
    <label for="nombretipo" class="control-label"><?php echo e('Nombre tipo'); ?></label>
    <input class="form-control" name="nombretipo" type="text" id="nombretipo" value="<?php echo e(isset($tipovotacion->nombretipo) ? $tipovotacion->nombretipo : ''); ?>" >
    <?php echo $errors->first('nombretipo', '<p class="alert alert-danger">El campo nombre tipo es requerido.</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('ocupacionpermitida') ? 'has-error' : ''); ?>">
    <label for="ocupacionpermitida" class="control-label"><?php echo e('Ocupación permitida'); ?></label>
    <br/>
    <br/>
    
    <?php $__currentLoopData = $collection1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <label class="btn" style="background-color: #9c9c9c"> <input type="checkbox" name="<?php echo e($key); ?>" id="<?php echo e($key); ?>"> <?php echo e($value); ?></label><br/>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo $errors->first('ocupacionpermitida', '<p class="alert alert-danger">El campo ocupación permitida es requerido.</p>'); ?>

    
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Actualizar' : 'Crear'); ?>">
</div>
