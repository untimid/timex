@php $headerserv = get_field('хедер_услуг') @endphp
@if ($headerserv)
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
  <div class="main-slider carriage-slider" style="background-image: url({{ $headerserv['изображение'] }})">
    <div class="main-slider-shadow about-slider-shadow">
      <div class="main-slider-shadow-bg"></div>
      <div class="main-slider-content about-slider-content">
        <a class="main-header-info-link" href="index.html">
        <img src="@asset('images/logo-white.png')" width="223" height="96" alt="Логотип компании 'Timex broker'">
      </a>
      <h1 class="visually-hidden">Транспортно-экспедиторские услуги</h1>
        <p class="about-slider-content-bold">{{ $headerserv['заголовок'] }}</p>
        <p class="about-slider-content-normal">{{ $headerserv['текст'] }}</p>
      </div>
      <div class="main-slider-rect"></div>
    </div>
    <div class="main-header-info">
    <nav class="main-navigation">
        <ul class="main-navigation-list">
          <li class="main-navigation-item navigation-about">
            <a class="main-navigation-about main-navigation-link" href="http://timex.timex/company" >О компании</a>
            <ul class="about-submenu submenu">
              <li class="about-submenu-item submenu-item">
                <a class="about-submenu-link submenu-link" href="http://timex.timex/company">Компания</a>
              </li>
              <li class="about-submenu-item submenu-item">
                <a class="about-submenu-link submenu-link" href="http://timex.timex/news">Новости</a>
              </li>
            </ul>
          </li>
          <li class="main-navigation-item navigation-services">
            <a class="main-navigation-link action-navigation" href="http://timex.timex/services">Услуги</a>
            <ul class="services-submenu submenu">
              <!--1-->
              <li class="services-submenu-item submenu-item">
                <a class="services-submenu-link submenu-link" href="http://timex.timex/services__trashed/customs">Таможенное декларирование</a>
              </li>
              <!--2-->
              <li class="services-submenu-item submenu-item">
                <a class="services-submenu-link submenu-link action-navigation" href="http://timex.timex/services__trashed/carriage">Транспортно-экспедиторские услуги</a>
              </li>
              <!--3-->
              <li class="services-submenu-item submenu-item">
                <a class="services-submenu-link submenu-link" href="http://timex.timex/services__trashed/storage">Хранение грузов</a>
              </li>
              <!--4-->
              <li class="services-submenu-item submenu-item">
                <a class="services-submenu-link submenu-link" href="#">Страхование грузов</a>
              </li>
              <!--5-->
              <li class="services-submenu-item submenu-item">
                <a class="services-submenu-link submenu-link" href="#">Сертификация</a>
              </li>
              <!--6-->
              <li class="services-submenu-item submenu-item">
                <a class="services-submenu-link submenu-link" href="#">Консалтинг</a>
              </li>
            </ul>
          </li>
          <li class="main-navigation-item navigation-partners">
            <a class="main-navigation-link" href="http://timex.timex/partners">Партнеры</a></li>
          <li class="main-navigation-item navigation-contacts">
            <a class="main-navigation-link" href="http://timex.timex/contact">Контакты</a></li>
          <li class="main-navigation-item">
            <a class="header-info-form-call" href="call.html">Заказать звонок
            </a></li>
        </ul>
    </nav>
    </div>
    </div>
</header>
@endif
