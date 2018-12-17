<?php $about = get_field('кто_мы') ?>
<?php if($about): ?>
  <section class="about" id="section1">
    <span class="double-slash">//</span>
    <h2 class="about-title basic-title" id="about"><?php echo e($about['заголовок']); ?></h2>
    <div class="about-cont">
      <div class="about-basic">
        <p class="about-text extra-text"><?php echo e($about['подзаголовок']); ?></p>
        <?php echo $about['текст']; ?>

      </div>

      <div class="about-more">
        <?php echo $about['блок_справа']; ?>

      </div>
    </div>
  </section>
<?php endif; ?>
