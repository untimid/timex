<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span><br>Timex broker</div></div>

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
  <div class="main-slider">
    <div class="main-slider-shadow">
      <div class="main-slider-shadow-bg"></div>
      <div class="main-slider-content">
        <a class="main-header-info-link" href="{{ home_url('/') }}">
          <img src="@asset('images/logo-white.png')" width="223" height="96" alt="Логотип компании 'Timex broker'">
        </a>
        <h1>ГК "Таймекс"</h1>
        <p>Мы соединяем страны</p>
        <a class="main-slider-content-btn" href="#">Подробнее</a>
      </div>
      <div class="main-slider-rect"></div>
    </div>
    <div class="main-header-info">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @else
        @include('partials._fake-menu')
      @endif

      <div class="main-slider-extra">
        <div class="main-slider-phone">
          <div class="main-slider-phone1">+7(812) 329 05 05 <p class="main-slider-phone-title">Санкт-Петербург</p></div>
          <div class="main-slider-phone2">+7(8617) 09 11 22 <p class="main-slider-phone-title">Новороссийск</p></div>
        </div>
        <div class="main-slider-controls">
          <button class="main-slider-controls-left" type="button" name="btn-left"></button>
          <button class="main-slider-controls-right" type="button" name="btn-right"></button>
        </div>
      </div>
    </div>
  </div>
</header>
