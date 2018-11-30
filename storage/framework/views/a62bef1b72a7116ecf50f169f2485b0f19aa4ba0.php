<?php $__env->startSection('content'); ?>
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: <?php echo config('admin.name'); ?>

    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>