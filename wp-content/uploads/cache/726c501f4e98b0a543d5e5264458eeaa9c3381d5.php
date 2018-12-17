<?php
  $partners = get_field('наши_партнёры');
  $index = 1;
  $itemsCount = count($partners['список']);
  $itemsInRow = 5;
  $emptyItemsNeeded = ($itemsCount % $itemsInRow) ? $itemsInRow - $itemsCount % $itemsInRow : 0;

  for ($i = 0; $i < $emptyItemsNeeded; $i++) {
    // Добавляем пустые элементы для вёрстки
    array_push($partners['список'], ['is_empty' => true]);
  }
?>

<?php if($partners): ?>
  <section class="partners" id="section5">
    <span class="double-slash">//</span>
    <h2 class="partners-title basic-title" id="partners"><?php echo e($partners['заголовок']); ?></h2>

    <ul class="partners-list">
      <?php $__currentLoopData = $partners['список']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if(empty($item['is_empty'])): ?>
          <li class="partners-item">
          <!-- <?php echo e($index); ?> -->
            <a href="<?php echo e($item['ссылка']); ?>">
              <img src="<?php echo e($item['изображение']); ?>" width="auto" height="auto" alt="<?php echo e($item['название']); ?>">
            </a>
          </li>
        <?php else: ?>
          <li class="empty-flex">
          <!-- <?php echo e($index); ?> Пустой элемент нужен для ровности сетки-->
          </li>
        <?php endif; ?>

        <?php $index += 1 ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </section>
<?php endif; ?>
