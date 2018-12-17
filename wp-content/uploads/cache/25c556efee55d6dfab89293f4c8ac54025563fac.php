<?php $__env->startSection('content'); ?>
<?php while(have_posts()): ?> <?php the_post() ?>

<section class="partners" id="section5Partners">

      <div class="partners-banner fs-banner">
        <div class="fs-banner-shadow cooperation-banner-shadow">
          <div class="fs-banner-shadow-bg cooperation-banner-shadow-bg"></div>
          <div class="fs-banner-content cooperation-banner-content">
            <p class="basic-title cooperation-banner-title">Хотите стать нашим клиентом?</p>
            <p class="basic-text cooperation-banner-text">позвоните или напишите нам, и мы предложим условия, подходящие именно вам</p>
          </div>
          <div class="fs-banner-rect cooperation-banner-rect"></div>
        </div>
        <div class="fs-banner-info cooperation-banner-info">
          <p class="basic-title cooperation-banner-info-title">+7 (812) 329 05 05</p>
          <a class="cooperation-banner-info-link" href="call.html">Заказать звонок</a>
        </div>
      </div>

      <?php endwhile; ?>
      <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-services', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>