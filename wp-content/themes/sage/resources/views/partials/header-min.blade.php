<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span><br>Timex broker</div></div>

<header class="main-header">
  <div class="main-header-pre">
    <div class="main-header-pre-cont">
      <span class="pre-header-item"><span class="pre-header-item-bold">Санкт-Петербург</span> +7 (812) 329 05 05 Измайловский пр. 29, БЦ "Маркс"</span>
      <span class="pre-header-item"><span class="pre-header-item-bold">Новороссийск</span> +7 (8617)09 11 22, ул. Ленина, 5, оф. 10, БЦ "Океан"</span>
    </div>
    <div class="main-header-pre-nav">
      <div class="main-navigation-search-cont">
        <a class="main-navigation-search-link" href="#search" title="Поиск по сайту"></a>
      </div>
      <a class="header-info-form-question" href="question.html">Задать вопрос</a>
      <a href="#" class="pre-header-login"><span class="pre-header-login-text">Личный кабинет</span></a>
    </div>
  </div>

  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main-navigation-list']) !!}
  @else
    @include('partials._fake-menu')
  @endif
</header>
