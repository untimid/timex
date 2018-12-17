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

      <nav class="main-navigation">
          <ul class="main-navigation-list navigation-404">
            <li class="main-navigation-item navigation-logo">
            <a class="logo-404" href="index.html">
            <img src="<?= App\asset_path('images/logo.png'); ?>" width="150" height="60" alt="Логотип компании 'Timex broker'"></a>
            </li>
            <li class="main-navigation-item navigation-about">
              <a class="main-navigation-about main-navigation-link" href="company.html" >О компании</a>
              <ul class="about-submenu submenu">
                <li class="about-submenu-item submenu-item">
                  <a class="about-submenu-link submenu-link" href="company.html">Компания</a>
                </li>
                <li class="about-submenu-item submenu-item">
                  <a class="about-submenu-link submenu-link" href="news.html">Новости</a>
                </li>
              </ul>
            </li>
            <li class="main-navigation-item navigation-services">
              <a class="main-navigation-link" href="services.html">Услуги</a>
              <ul class="services-submenu submenu">
                <!--1-->
                <li class="services-submenu-item submenu-item">
                  <a class="services-submenu-link submenu-link" href="customs.html">Таможенное декларирование</a>
                </li>
                <!--2-->
                <li class="services-submenu-item submenu-item">
                  <a class="services-submenu-link submenu-link" href="carriage.html">Транспортно-экспедиторские услуги</a>
                </li>
                <!--3-->
                <li class="services-submenu-item submenu-item">
                  <a class="services-submenu-link submenu-link" href="storage.html">Хранение грузов</a>
                </li>
                <!--4-->
                <li class="services-submenu-item submenu-item">
                  <a class="services-submenu-link submenu-link" href="news.html">Страхование грузов</a>
                </li>
                <!--5-->
                <li class="services-submenu-item submenu-item">
                  <a class="services-submenu-link submenu-link" href="news.html">Сертификация</a>
                </li>
                <!--6-->
                <li class="services-submenu-item submenu-item">
                  <a class="services-submenu-link submenu-link" href="news.html">Консалтинг</a>
                </li>
              </ul>
            </li>
            <li class="main-navigation-item navigation-partners">
              <a class="main-navigation-link" href="partners.html">Партнеры</a></li>
            <li class="main-navigation-item navigation-contacts">
              <a class="main-navigation-link" href="contact.html">Контакты</a></li>
            <li class="main-navigation-item">
              <a class="header-info-form-call" href="call.html">Заказать звонок
              </a></li>
          </ul>
      </nav>
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