<?php $__env->startSection('content'); ?>

  

  
  <?php while(have_posts()): ?> <?php the_post() ?>

    
    <main>
      <div class="key-indicators">
        <div class="key-indicators-item">
          <span class="double-slash">//</span>
          <span class="key-indicators-text-bold">5000+</span>
          <span class="key-indicators-text">контейнеров в год перевозятся с нашей помощью</span>
        </div>
        <div class="key-indicators-item">
          <span class="double-slash">//</span>
          <span class="key-indicators-text-bold">100%</span>
          <span class="key-indicators-text">выполнение обязательств перед клиентами</span>
        </div>
        <div class="key-indicators-item">
          <span class="double-slash">//</span>
          <span class="key-indicators-text-bold">24/7</span>
          <span class="key-indicators-text">работаем 24 часа 7 дней в неделю</span>
        </div>
      </div>

      
      
      <?php echo $__env->make('partials.front-page.about', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <section class="services" id="section2">
        <?php echo $__env->make('partials.front-page.services', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('partials.front-page.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </section>

      <?php echo $__env->make('partials.front-page.features', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('partials.news', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('partials.front-page.partners', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </main>

  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>