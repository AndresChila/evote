<?php $__env->startSection('title', 'Page Not Found'); ?>

<?php $__env->startSection('message', 'La URL solicitada no fue encontrada.'); ?>

<?php echo $__env->make('errors::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>