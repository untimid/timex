<?php $features = get_field('почему_мы') ?>
<?php if($features): ?>
  <section class="feature" id="section3">
    <span class="double-slash">//</span>
    <h2 class="feature-title basic-title" id="feature"><?php echo e($features['заголовок']); ?></h2>
    <ul class="feature-list">
      <?php
        $featuresList = $features['список'];
        $index = 1;
      ?>

      <?php $__currentLoopData = $featuresList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="feature-item">
        <!-- <?php echo e($index); ?> -->
          <div class="feature-item-icon" style="background-image: url(<?php echo e($item['изображение']); ?>)"></div>
          <p class="feature-item-title"><?php echo e($item['заголовок']); ?></p>
          <p class="feature-item-text"><?php echo e($item['текст']); ?></p>
        </li>

        <?php $index += 1 ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </section>
<?php endif; ?>
