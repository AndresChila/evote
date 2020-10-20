<div class="form-group <?php echo e($errors->has('nombrecandidato') ? 'has-error' : ''); ?>">
    <label for="nombrecandidato" class="control-label"><?php echo e('Nombre Candidato'); ?></label>
    <input class="form-control" name="nombrecandidato" type="text" id="nombrecandidato" value="<?php echo e(isset($candidato->nombrecandidato) ? $candidato->nombrecandidato : ''); ?>" >
    <?php echo $errors->first('nombrecandidato', '<p class="alert alert-danger">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('apellidocandidato') ? 'has-error' : ''); ?>">
    <label for="apellidocandidato" class="control-label"><?php echo e('Apellido Candidato'); ?></label>
    <input class="form-control" name="apellidocandidato" type="text" id="apellidocandidato" value="<?php echo e(isset($candidato->apellidocandidato) ? $candidato->apellidocandidato : ''); ?>" >
    <?php echo $errors->first('apellidocandidato', '<p class="alert alert-danger">:message</p>'); ?>

</div>

<div class="form-group <?php echo e($errors->has('foto') ? 'has-error' : ''); ?>">
    <label for="foto" class="control-label"><?php echo e('Foto'); ?></label>
   
        <?php if(isset($candidato->foto)): ?>
        <br/>
           <img src="<?php echo e(asset('storage').'/'. $candidato->foto); ?>" alt="" width="150" class="img-thumbnail img-fluid">
        <br/>
        <?php endif; ?> 
   
    <input class="form-control" name="foto" type="file" id="foto" value="<?php echo e(isset($candidato->foto) ? $candidato->foto : ''); ?>" >
    <?php echo $errors->first('foto', '<p class="alert alert-danger">:message</p>'); ?>

</div>




<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Actualizar' : 'Crear'); ?>">
</div>
