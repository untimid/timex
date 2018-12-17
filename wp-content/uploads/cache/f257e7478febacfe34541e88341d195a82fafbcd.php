<?php $banner = get_field('наши_принципы_и_достижения'); ?>
<?php if($banner): ?>
  <div class="services-banner">
    <div class="services-banner-shadow">
      <div class="services-banner-shadow-bg"></div>
      <div class="services-banner-shadow-content">
        <h3 class="services-banner-title">Наши принципы и достижения</h3>
        <div class="services-banner-shadow-text-cont">
          <p class="services-banner-shadow-title"><?php echo e($banner['заголовок']); ?> <br>
            <span><?php echo e($banner['подзаголовок']); ?></span></p>
          <p class="services-banner-shadow-text basic-text"><?php echo e($banner['текст']); ?></p>
        </div>
      </div>
      <div class="services-banner-shadow-rect"></div>
    </div>
  </div>
  </section>
<?php endif; ?>
