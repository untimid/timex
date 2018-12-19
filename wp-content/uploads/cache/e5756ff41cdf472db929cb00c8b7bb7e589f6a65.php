<?php
  /**
   * Получаем посты с категорией NEWS
   * @see https://wp-kama.ru/function/get_posts
   */
  $posts = get_posts([
    'numberposts' => 5,
    'category_name' => 'news'
  ]);
?>

<?php if(count($posts)): ?>
  <section class="news" id="section4">
    <h2 class="visually-hidden" id="news">Новости</h2>
      <div class="news-main">
        <div class="news-main-shadow">
          <div class="news-main-shadow-bg"></div>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php
                /**
                 * Устанавливаем данные поста, чтобы иметь доступ
                 * к стандартным функциям для шаблонов (get_permalink() и т.д.)
                 */
                setup_postdata($post);
              ?>

              <div class="news-main-shadow-content">
                <time class="post-date main-post-date" datetime="2018-10-16">16 октября 2018</time>
                <div class="news-main-shadow-text-cont">
                  <p class="news-main-title basic-title"><a href="<?php echo e(get_permalink()); ?>"><span class="double-slash">//</span><?php echo e(get_the_title($post)); ?></a></p>
                  <p class="news-main-text basic-text"><?php echo e(get_the_excerpt()); ?></p>
                  <div class="news-controls">
                    <button class="news-controls-left" type="button" name="news-controls-left" id="news-controls-left"></button>
                    <button class="news-controls-right" type="button" name="news-controls-right" id="news-controls-right"></button>
                  </div>
                </div>
              </div>

              <?php
                /**
                 * Сбрасываем данные поста в исходное состояние, чтобы стандартные функции
                 * работали корректно вне данного блока
                 */
                wp_reset_postdata();
              ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <div class="news-main-shadow-rect"></div>
        </div>
        <div class="news-main-other">
          <a class="news-main-other-link" href="<?php echo e(get_category_link('news')); ?>">Все новости</a>
        </div>
      </div>
  </section>
<?php endif; ?>
