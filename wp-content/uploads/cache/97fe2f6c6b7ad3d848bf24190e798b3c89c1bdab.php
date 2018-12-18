<?php $__env->startSection('content'); ?>


  <?php if(!have_posts()): ?>
  <header class="main-header">
    <div class="main-header-pre">
      <div class="main-header-pre-cont">
      <span class="pre-header-item"><span class="pre-header-item-bold">Санкт-Петербург</span> +7 (812) 329 05 05 Измайловский пр. 29, БЦ "Маркс"</span>
      <span class="pre-header-item"><span class="pre-header-item-bold">Новороссийск</span> +7 (8617)09 11 22, ул. Ленина, 5, оф. 10,  БЦ "Океан"</span>
      </div>
      <div class="main-header-pre-nav">
      <div class="main-navigation-search-cont">
      <a class="main-navigation-search-link" href="#search" title="Поиск по сайту"></a>
    </div>
      <a class="header-info-form-question" href="question.html">Задать вопрос</a>
      <a href="#" class="pre-header-login"><span class="pre-header-login-text">Личный кабинет</span></a>
      </div>
    </div>
    <div class="main-slider cont-404">

      <a class="header-logo" href="<?php echo e(home_url('/')); ?>">
        <img src="<?= App\asset_path('images/logo.png'); ?>" width="151" height="61" alt="Логотип компании 'Timex broker'"></a>

      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main-navigation-list']); ?>

      <?php else: ?>
        <?php echo $__env->make('partials._fake-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endif; ?>
        <div class="content-404">
          <p class="content-404-normal">404</p>
          <p class="content-404-bold">Страница не существует или удалена</p>
          <a class="main-slider-content-btn" href="index.html">На главную</a>
        </div>
      </div>
  </header>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-404', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>