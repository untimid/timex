<?php $__env->startSection('content'); ?>
<?php while(have_posts()): ?> <?php the_post() ?>

<?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-services', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>