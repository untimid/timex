<?php $__env->startSection('content'); ?>
<?php while(have_posts()): ?> <?php the_post() ?>

<?php wp_nav_menu(['theme_location' => 'submenu', 'menu_class' => 'nav2 serv-nav']) ?>
<section class="services pservices" id="section2">
  <span class="double-slash">//</span>
  <h2 class="services-title basic-title" id="services">Наши услуги</h2>
<p class="extra-text pservices-extra-text">Мы предлагаем комплексное решение ваших задач по импорту в Россию любых видов грузов с точки отправления до вашего склада, Вам нужно знать совсем немного: что, когда, куда и сколько нужно доставить, остальное мы возьмем на себя</p>
    <div class="services-cont2">
    <div class="services-help">
      <p class="services-help-title">Нужна консультация по услугам?</p>
        <p class="services-help-text">Позвоните нам или оставьте заявку. Мы перезвоним вам в течении рабочего дня</p>
        <a class="services-help-link" href="#">Заказать звонок</a>
    </div>
  <ul class="services-list">
    <li class="services-item">
      <!--1-->
      <div class="services-item-cont">
        <div class="services-item-cont-text">
      <span class="services-item-slash">//</span>
      <span class="services-item-number">01.</span>
      </div>
      <div class="services-item-circle circle-1"></div>
      <a href="carriage.html">Транспортно-экспедиционные услуги</a>
      <div class="services-item-cont-bg">
        <a class="services-item-cont-bg-link" href="carriage.html"></a>
      </div>
      </div>
    </li>
    <li class="services-item">
      <!--2-->
      <div class="services-item-cont">
        <div class="services-item-cont-text">
      <span class="services-item-slash">//</span>
      <span class="services-item-number">02.</span>
      </div>
      <div class="services-item-circle circle-2"></div>
      <a href="customs.html">Таможенное декларирование</a>
      <div class="services-item-cont-bg">
        <a class="services-item-cont-bg-link" href="customs.html"></a>
      </div>
      </div>
    </li>
    <li class="services-item">
      <!--3-->
      <div class="services-item-cont">
        <div class="services-item-cont-text">
      <span class="services-item-slash">//</span>
      <span class="services-item-number">03.</span>
      </div>
      <div class="services-item-circle circle-3"></div>
      <a href="storage.html">Консолидация и хранение грузов</a>
      <div class="services-item-cont-bg">
        <a class="services-item-cont-bg-link" href="storage.html"></a>
      </div>
      </div>
    </li>
    <li class="services-item">
      <!--4-->
      <div class="services-item-cont">
        <div class="services-item-cont-text">
      <span class="services-item-slash">//</span>
      <span class="services-item-number">04.</span>
      </div>
      <div class="services-item-circle circle-4"></div>
      <a href="#">Сертификация и лицензирование</a>
      <div class="services-item-cont-bg">
        <a class="services-item-cont-bg-link" href="#"></a>
      </div>
      </div>
    </li>
    <li class="services-item">
      <!--5-->
      <div class="services-item-cont">
        <div class="services-item-cont-text">
      <span class="services-item-slash">//</span>
      <span class="services-item-number">05.</span>
      </div>
      <div class="services-item-circle circle-5"></div>
      <a href="#">Страхование грузов</a>
      <div class="services-item-cont-bg">
        <a class="services-item-cont-bg-link" href="#"></a>
      </div>
      </div>
    </li>
    <li class="services-item">
      <!--6-->
      <div class="services-item-cont">
        <div class="services-item-cont-text">
      <span class="services-item-slash">//</span>
      <span class="services-item-number">06.</span>
      </div>
      <div class="services-item-circle circle-6"></div>
      <a href="#">Консалтинг</a>
      <div class="services-item-cont-bg">
        <a class="services-item-cont-bg-link" href="#"></a>
      </div>
      </div>
    </li>
  </ul>
  </div>

<?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-min', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>