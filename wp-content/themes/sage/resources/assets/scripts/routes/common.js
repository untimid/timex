/* global ymaps */

export default {
  /**
   * Запустится при загрузке страницы
   */
  init() {
    // Прелоудер
    const $preloader = $('#p_prldr'),
    $svg_anm = $preloader.find('.svg_anm');
    $svg_anm.fadeOut();
    $preloader.delay(500).fadeOut('slow');

    this.spyScroll();
    this.initSearch();
    this.initModals();
    this.initMap();
  },

  /**
   * Следить за скроллингом страницы
   */
  spyScroll() {
    // Подсвечивать соответствующий якорь при скролле блока
    const menuSelector = '.side-navigation-list';
    const navbar = $('#navbar');
    let scrolledByUs = false;

    $(document).on('scroll', function() {
      // Показать или спрятать меню при скролле
      const scrollTop = $(document).scrollTop();
      navbar['fade'+ (scrollTop > 200 ? 'In': 'Out')]({
        duration: 500,
      });

      if (scrolledByUs) {
        // Не переключаем кнопки, если мы сами скроллим окно
        return;
      }

      $(menuSelector + ' a').each(function() {
        const hash = $(this).attr('href');
        const target = $(hash);

        if (target.position().top <= scrollTop && target.position().top + target.outerHeight() > scrollTop) {
          $(menuSelector + ' a.active').removeClass('active');
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }
      });
    });

    $('a[href^="#"]').click(function(e) {
      e.preventDefault();

      $(menuSelector + ' a.active').removeClass('active');
      $(this).addClass('active');

      const hash = $(this).attr('href');
      const target = $(hash);

      if (target.offset()) {
        scrolledByUs = true;

        $('html, body').animate({
          scrollTop: target.offset().top,
        }, 500, function() {
          window.location.hash = hash;
          scrolledByUs = false;
        });
      }
    });
  },

  /**
   * Инициализирует поиск
   */
  initSearch() {
    $('a[href="#search"]').on('click', function(event) {
      event.preventDefault();

      $('#search').addClass('open');
      $('#search > form > input[type="search"]').focus();
    });

    $('#search, #search button.close').on('click keyup', function(event) {
      if (
        event.target === this ||
        event.target.className === 'close' ||
        event.keyCode === 27
      ) {
        $(this).removeClass('open');
      }
    });
  },

  /**
   * Инициализирует карту
   */
  initMap() {
    if (!window.ymaps) {
      // Прерываем, если глобальный объект ymaps недоступен
      return;
    }

    ymaps.ready(function () {
      const myMap = new ymaps.Map('tab1', {
          center: [59.910159, 30.301395],
          zoom: 16,
          controls: ['fullscreenControl'],
        }, {
          searchControlProvider: 'yandex#search',
        }),

        myPlacemark = new ymaps.Placemark([59.910395, 30.306883], {
          hintContent: '<h1>Timex Broker</h1>',
          balloonContent: `
            <strong>ГЛАВНЫЙ ОФИС</strong> <br>
            Измайловский проспект, 29 лит. И,<br>
            пом./ком. 26-Н/1<br> БЦ Маркс
          `,
        }, {
          // Опции.
          // Необходимо указать данный тип макета.
          iconLayout: 'default#image',
          // Своё изображение иконки метки.
          iconImageHref: 'http://p-alp.ru/map-pin.png',
          // Размеры метки.
          iconImageSize: [40, 52],
          // Смещение левого верхнего угла иконки относительно
          // её 'ножки' (точки привязки).
          iconImageOffset: [-20, -55],
        });

      myMap.controls.add('zoomControl', {
        size: 'small',
        float: 'none',
        position: {
          top: '70px',
          right: '10px',
        },
      });

      myMap.behaviors.disable('scrollZoom');
      myMap.geoObjects.add(myPlacemark);
    });
  },


  /**
   * Инициализирует модальные окна
   */
  initModals() {
    $('a[href="question.html"]').on('click', function(event) {
      event.preventDefault();

      $('#modalQ').addClass('open');
      $('#modalquestion').addClass('open');
      $('#modalquestion > form > input[type="text"]').focus();
    });

    $('#modalQ, #modalQ button.close').on('click keyup', function(event) {
      if (
        event.target === this ||
        event.target.className === 'close' ||
        event.keyCode === 27
      ) {
        $(this).removeClass('open');
        $('#modalquestion').removeClass('open');
      }
    });

    $('a[href="http://call.html"]').on('click', function(event) {
      event.preventDefault();

      $('#modalC').addClass('open');
      $('#modalcall').addClass('open');
      $('#modalcall > form > input[type="text"]').focus();
    });

    $('#modalC, #modalC button.close').on('click keyup', function(event) {
      if (
        event.target === this ||
        event.target.className === 'close' ||
        event.keyCode === 27
      ) {
        $(this).removeClass('open');
      }
    });
  },
};
