<?php $headerserv = get_field('хедер_услуг') ?>
<?php if($headerserv): ?>
<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span><br>Timex broker</div></div>

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
  <div class="main-slider carriage-slider" style="background-image: url(<?php echo e($headerserv['изображение']); ?>)">
    <div class="main-slider-shadow about-slider-shadow">
      <div class="main-slider-shadow-bg"></div>
      <div class="main-slider-content about-slider-content">
        <a class="main-header-info-link" href="index.html">
        <img src="<?= App\asset_path('images/logo-white.png'); ?>" width="223" height="96" alt="Логотип компании 'Timex broker'">
      </a>
      <h1 class="visually-hidden">Транспортно-экспедиторские услуги</h1>
        <p class="about-slider-content-bold"><?php echo e($headerserv['заголовок']); ?></p>
        <p class="about-slider-content-normal"><?php echo e($headerserv['текст']); ?></p>
      </div>
      <div class="main-slider-rect"></div>
    </div>
    <div class="main-header-info">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main-navigation-list']); ?>

      <?php else: ?>
        <?php echo $__env->make('partials._fake-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endif; ?>

        <?php wp_nav_menu(['theme_location' => 'submenu', 'menu_class' => 'nav2']) ?>
    </div>
    </div>
</header>
<?php endif; ?>
