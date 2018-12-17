<?php $services = get_field('что_мы_делаем') ?>
<?php if($services): ?>
  <span class="double-slash">//</span>
  <h2 class="services-title basic-title" id="services"><?php echo e($services['заголовок']); ?></h2>
  <div class="services-cont1">
    <div><?php echo $services['текст']; ?></div>

    <div class="services-sidebar">
      <div class="services-sidebar-circle"></div>
      <div class="services-sidebar-icon"></div>
      <a class="services-sidebar-link" href="#">Наши услуги</a>
    </div>
  </div>
  <div class="services-cont2">
    <div class="services-help">
      <p class="services-help-title">Нужна консультация по услугам?</p>
      <p class="services-help-text">Позвоните нам или оставьте заявку. Мы перезвоним вам в течении рабочего дня</p>
      <a class="services-help-link" href="#">Заказать звонок</a>
    </div>

    <ul class="services-list">
      <?php
        $servicesList = $services['услуги'];
        $index = 1;
      ?>

      <?php $__currentLoopData = $servicesList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="services-item">
        <!-- <?php echo e($index); ?> -->
          <div class="services-item-cont">
            <div class="services-item-cont-text">
              <span class="services-item-slash">//</span>
              <span class="services-item-number">0<?php echo e($index); ?>.</span>
            </div>

            <div class="services-item-circle" style="background-image: url(<?php echo e($item['изображение']); ?>)"></div>
            <a href="<?php echo e($item['ссылка']); ?>"><?php echo e($item['заголовок']); ?></a>

            <div class="services-item-cont-bg" style="background-image: url(<?php echo e($item['фон']); ?>)">
              <a class="services-item-cont-bg-link" href="<?php echo e($item['ссылка']); ?>"></a>
            </div>
          </div>
        </li>

        <?php $index += 1 ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
<?php endif; ?>
