<?php $__env->startSection('content'); ?>
<?php while(have_posts()): ?> <?php the_post() ?>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=445eb01a-2960-4d76-93dc-5625063675c1"></script>

<section class="services pservices">
  <span class="double-slash">//</span>
  <h2 class="services-title basic-title">Контакты</h2>

<div class="tabs-cont">
<div class="tabs_box">
<ul class="tabs_menu">
  <li><a href="#tab1" class="active">Санкт-Петербург</a></li>
  <li><a href="#tab2">Новороссийск</a></li>
</ul>
<div class="tab" id="tab1">
  <div class="tab-map-cont" >
    <div class="tab-shadow">
      <div class="tab-shadow-bg">
        <div class="tab-shadow-content">
          <p class="tab-shadow-title">Главный офис<br><span class="tab-shadow-subtitle">Санкт-Петербург</span></p>
          <p class="tab-shadow-phone">+7 (812) 329 05 05</p>
          <span class="tab-shadow-text">
          office@timexbroker.ru<br>
          Измайловский пр. 29, лит. И,<br>
          пом./ком. 26-Н/1<br>
          БЦ "Маркс"<br>
          пн-пт: 9.30 - 18.30
        </span>
        </div>
        <div class="tab-rect"></div>
      </div>
    </div>
  </div>
</div>

<div class="tab" id="tab2">
  <div class="tab-map-cont">
    <div class="tab-shadow">
      <div class="tab-shadow-bg">
        <div class="tab-shadow-content">
          <p class="tab-shadow-title">Дополнительный офис</p>
          <span class="tab-shadow-subtitle">Новороссийск</span>
          <p class="tab-shadow-phone">+7 (8617) 09 11 22</p>
          <span class="tab-shadow-text">
          office@timexbroker.ru<br>
          пр. Ленина 5 оф. 10<br>
          БЦ "Океан"<br>
          пн-пт: 9.30 - 18.30
        </span>
        </div>
        <div class="tab-rect"></div>
      </div>
    </div>
  </div>

</div>
</div>
</div>
  <div class="pservices-exta-cont">
  <div class="requisites">
  <span class="double-slash">//</span>
  <h2 class="requisites-title basic-title">Реквизиты</h2>
  <p class="requisites-extra-text extra-text">
    Общество с ограниченной ответственностью «Таймекс Брокер» («Timex Broker», LLC)
  </p>
  <p class="requisites-basic-text basic-text">
    Юридический адрес: 190005, город Санкт-Петербург,<br>
    Измайловский пр., д. 29, Литер И,  пом.26-Н, ком.1<br>
    ИНН  7804533509<br>
    КПП  783901001<br>
    ОГРН  1147847178731<br>
    Банк: Северо-Западный банк ПАО Сбербанк<br>
    г.Санкт-Петербург<br>
    р/с 40702810655000009568<br>
    к/с 044030653<br>
    БИК  30101810500000000653
  </p>
  </div>

  <div class="write-to-us">
  <span class="double-slash">//</span>
  <h2 class="write-to-us-title basic-title">Напишите нам</h2>
  <form class="write-to-us-form" action="#" method="post">
    <input class="write-to-us-form-field" type="text" name="write-to-us-form-name" value="" placeholder="Ваше имя">
    <input class="write-to-us-form-field" type="tel" name="write-to-us-form-phone" value="" placeholder="Телефон для связи">
    <input class="write-to-us-form-field" type="email" name="write-to-us-form-email" value="" placeholder="Почта для ответа">
    <textarea class="write-to-us-form-field" name="write-to-us-form-mes" rows="1" cols="1" placeholder="Сообщение"></textarea>
    <div class="write-to-us-form-cont">
      <div class="write-to-us-capcha"></div>
      <input class="write-to-us-btn" type="submit" value="Отправить">
    </div>
    <span class="write-to-us-posttext">Нажимая кнопку "Отправить",вы подтверждаете свое согласие на <a href="confidential.html">обработку персональных данных</a></span>
  </form>
  </div>
  </div>
</section>

<?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-min', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>