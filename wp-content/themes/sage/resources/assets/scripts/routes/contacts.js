export default {
  /**
   * Запустится при загрузке страницы
   */
  init() {
    this.initTabs();
  },

  /**
   * Инициализирует вкладки с картами
   */
  initTabs() {
    $('.tabs_menu a').click(function(e) {
      e.preventDefault();

      $('.tabs_menu .active').removeClass('active');
      $(this).addClass('active');

      const tab = $(this).attr('href');

      $('.tab').not(tab).css({
        visibility: 'hidden',
        opacity: '0',
        zIndex: '100',
      });

      $(tab).css({
        opacity: '1',
        visibility: 'visible',
      }).fadeIn(400);
    });
  },
};
