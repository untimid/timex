{{--
  Template Name: О компании
--}}
@extends('layouts.app-services')
@section('content')
@while(have_posts()) @php the_post() @endphp

<section class="about" id="section1About">
  <span class="double-slash">//</span>
  <h2 class="about-title basic-title" id="about">Компания</h2>
  <div class="key-indicators about-key-indicators">
    <!--1-->
    <div class="key-indicators-item about-key-indicators-item">
      <span class="key-indicators-text-bold about-key-indicators-text-bold">20+</span>
      <span class="key-indicators-text about-key-indicators-text">В 2017г. были задекларированы и доставлены грузы более, чем из 20 стран</span>
    </div>
    <!--2-->
    <div class="key-indicators-item about-key-indicators-item">
      <span class="key-indicators-text-bold about-key-indicators-text-bold">5000+</span>
      <span class="key-indicators-text about-key-indicators-text">контейнеров в год перевозятся с нашей помощью</span>
    </div>
    <!--3-->
    <div class="key-indicators-item about-key-indicators-item">
      <span class="key-indicators-text-bold about-key-indicators-text-bold">2700+</span>
      <span class="key-indicators-text about-key-indicators-text">Более 2700 деклараций в год</span>
    </div>
    <!--4-->
    <div class="key-indicators-item about-key-indicators-item">
      <span class="key-indicators-text-bold about-key-indicators-text-bold">100%</span>
      <span class="key-indicators-text about-key-indicators-text">Выполнение обязательств перед клиентами</span>
    </div>
    <!--5-->
    <div class="key-indicators-item about-key-indicators-item">
      <span class="key-indicators-text-bold about-key-indicators-text-bold">20+</span>
      <span class="key-indicators-text about-key-indicators-text">Более 20 контрактов с судовыми линиями</span>
    </div>
    <!--6-->
    <div class="key-indicators-item about-key-indicators-item">
      <span class="key-indicators-text-bold about-key-indicators-text-bold">24/7</span>
      <span class="key-indicators-text about-key-indicators-text">Работаем 24 часа  7 дней в неделю</span>
    </div>
  </div>
  <div class="about-cont">
    <div class="about-basic">
  <p class="about-text extra-text">Группа  компаний "Таймекс"  осуществляет комплексное решение задач клиента по импорту в Россию любых видов грузов до склада заказчика.</p>
  <ul class="about-basic-list basic-text">
    <span class="about-basic-list-text">В перечень услуг, оказываемых компанией, входят:</span>
    <li class="basic-list-item classic-list"><span>таможенное декларирование грузов,</span></li>
    <li class="basic-list-item classic-list"><span>транспортно-экспедиционные услуги,</span></li>
    <li class="basic-list-item classic-list"><span>хранение,</span></li>
    <li class="basic-list-item classic-list"><span>хранение,</span></li>
    <li class="basic-list-item classic-list"><span>перетарка,</span></li>
    <li class="basic-list-item classic-list"><span>осуществление прохождения грузом всех необходимых при пересечении границы мер государственного контроля (в том числе фитосанитарный  контроль, ветеринарный контроль, санитарно-эпидемиологический контроль)</span></li>
    <li class="basic-list-item classic-list"><span>консалтинговые и консультационные услуги</span></li>
    <li class="basic-list-item classic-list"><span>страхование грузов,</span></li>
    <li class="basic-list-item classic-list"><span>получение разрешительной документации (сертификаты , декларации о соответствии и т.д.).</span></li>
  </ul>
  </div>
  <div class="about-about-more about-more">
      <span class="about-about-more-title about-more-title">мы гарантируем  точное выполнение обязательств:</span>
        <p class="about-about-more-text about-more-text">Благодаря системному и  комплексному подходу ГК "Таймекс"  гарантирует обеспечение ответственности одного исполнителя за получение высококачественного результата  на всех этапах импорта или экспорта </p>
  </div>
  </div>
</section>
<section class="geo basic-section" id="section2About">
  <span class="double-slash">//</span>
  <h2 class="geo-title basic-title" id="services">География</h2>
  <div class="geo-cont1">
  <div class="geo-map"></div>
    <span class="geo-text extra-text">Страны , в которых мы работаем:</span>
  <ul class="geo-list">
    <li class="geo-item">Аргентина</li>
    <li class="geo-item">Бразилия</li>
    <li class="geo-item">Египет</li>
    <li class="geo-item">Израиль</li>
    <li class="geo-item">Индия</li>
    <li class="geo-item">Казахстан</li>
    <li class="geo-item">Китай</li>
    <li class="geo-item">Кипр</li>
    <li class="geo-item">Корея</li>
    <li class="geo-item">Македония</li>
    <li class="geo-item">Марокко</li>
    <li class="geo-item">Молдова</li>
    <li class="geo-item">Пакистан</li>
    <li class="geo-item">Перу</li>
    <li class="geo-item">Сербия</li>
    <li class="geo-item">США</li>
    <li class="geo-item">Германия</li>
    <li class="geo-item">Франция</li>
    <li class="geo-item">Италия</li>
    <li class="geo-item">Испания</li>
    <li class="geo-item">Нидерланды</li>
    <li class="geo-item">Норвегия</li>
    <li class="geo-item">Финляндия</li>
    <li class="geo-item">Уругвай</li>
    <li class="geo-item">Чили</li>
    <li class="geo-item">Эквадор</li>
    <li class="geo-item">ЮАР</li>
    <li class="geo-item">Япония</li>
  </ul>
  </div>
</section>
<section class="feature" id="section3About">
  <span class="double-slash">//</span>
  <h2 class="feature-title basic-title" id="feature">Почему мы</h2>
  <ul class="feature-list">
    <li class="feature-item">
      <!--1-->
      <div class="feature-item-icon1 feature-item-icon"></div>
      <p class="feature-item-title">Индивидуальный подход</p>
      <p class="feature-item-text">С каждым клиентом работает персональный менеджер, который информирует клиента на всех этапах перевозки и таможенного декларирования</p>
    </li>
    <li class="feature-item">
      <!--2-->
      <div class="feature-item-icon feature-item-icon2"></div>
      <p class="feature-item-title">Гарантия сохранности груза</p>
      <p class="feature-item-text">Страхуем товары у крупных страховых компаний (тут желательно написать, каких именно)</p>
    </li>
    <li class="feature-item">
      <!--3-->
      <div class="feature-item-icon feature-item-icon3"></div>
      <p class="feature-item-title">Полный комплекс услуг от одной компании</p>
      <p class="feature-item-text">Мы обеспечиваем полное сопровождение: транспортировку, консолидацию и хранение груза на складе, таможенное декларирование, представление интересов клиента в гос.органах (Россельхознадзор, Роспотребнадзор и
        т.д.)</p>
    </li>
    <li class="feature-item">
      <!--4-->
      <div class="feature-item-icon feature-item-icon4"></div>
      <p class="feature-item-title">Широкий географический охват регионов</p>
      <p class="feature-item-text">Мы доставляем грузы и декларируем их в большом количестве регионов: (здесь желательно перечисление самых важных)</p>
    </li>
    <li class="feature-item">
      <!--5-->
      <div class="feature-item-icon feature-item-icon5"></div>
      <p class="feature-item-title">Оптимизация маршрута и учет специфики товара</p>
      <p class="feature-item-text">Оказываем консультации при выборе оптимального места таможенного декларирования, маршрута доставки с учетом специфики товаров</p>
    </li>
    <li class="feature-item">
      <!--6-->
      <div class="feature-item-icon feature-item-icon6"></div>
      <p class="feature-item-title">Консультации</p>
      <p class="feature-item-text">Профессиональные консультации по вопросам таможенного и гражданского законодательства</p>
    </li>
  </ul>

  <div class="basic-banner feature-banner">
    <div class="basic-banner-shadow feature-banner-shadow">
      <div class="basic-banner-shadow-bg feature-banner-shadow-bg"></div>
      <div class="basic-banner-shadow-content feature-banner-shadow-content">
        <div class="timex-doc"></div>
    <div class="feature-banner-shadow-text-cont">
    <p class="feature-banner-shadow-title">ГК "таймекс"</p>
    <a href="#">свидетельство таможенного представителя №002263</a>
      </div>
      </div>
      <div class="news-main-shadow-rect"></div>
    </div>
  </div>
</section>

<section class="philosophy basic-section" id="section4About">
  <span class="double-slash">//</span>
  <h2 class="philosophy-title basic-title" id="philosophyH2">Философия компании</h2>
  <p class="philosophy-text extra-text">
    компания создана в 2014 году группой профессионалов из рахных отраслей и компаний, обхединенной общей целью
  </p>
  <div class="philosophy-double-list">
    <div class="philosophy-list-cont philosophy-list-principles">
      <h3 class="philosophy-list-title">Наши принципы</h3>
      <ul class="philosophy-list principles-list">
        <li class="philosophy-item principles-item">
          <div class="icon-philosophy-item icon-principles-item"></div>
          <span>100% выполнение своих обещаний, вне зависимости от внешних обстоятельств и текущей коммерческой конъюнктуры</span>
        </li>
        <li class="philosophy-item principles-item">
          <div class="icon-philosophy-item icon-principles-item"></div>
          <span>Обоснованные и конкурентноспособные условия сотрудничества</span>
        </li>
        <li class="philosophy-item principles-item">
          <div class="icon-philosophy-item icon-principles-item"></div>
          <span>Предоставление полного комплекса услуг для сферы ВЭД</span>
        </li>
        <li class="philosophy-item principles-item">
          <div class="icon-philosophy-item icon-principles-item"></div>
          <span>Создание максимально комфортного сервиса для клиентов</span>
        </li>
      </ul>
    </div>

    <div class="philosophy-list-cont philosophy-list-progress">
      <h3 class="philosophy-list-title">Достижения</h3>
      <ul class="philosophy-list progress-list">
        <li class=" philosophy-item progress-item">
          <div class="icon-philosophy-item icon-progress-item"></div>
          <span>Основной объем клиентов сформирован по рекомендациям наших же клиентов</span>
        </li>
        <li class="philosophy-item progress-item">
          <div class="icon-philosophy-item icon-progress-item"></div>
          <span>Предоставление полного комплекса услуг для сферы ВЭД</span>
        </li>
        <li class="philosophy-item progress-item">
          <div class="icon-philosophy-item icon-progress-item"></div>
          <span>Создание максимально комфортного сервиса для клиентов</span>
        </li>
        <li class="philosophy-item progress-item">
          <div class="icon-philosophy-item icon-progress-item"></div>
          <span>более 400 когтейнеров в месяц</span>
        </li>
      </ul>
    </div>
  </div>
  <p class="philosophy-basic-text basic-text">
    Компания последовательно и уверенно развивается и прошла путь от небольшой транспортно-экспедиторской компании к группе компаний, занимающейся транспортно-экспедиторской деятельностью и таможенным декларированием.
    Выбранная стратегия ведения бизнеса оправдала себя в полной мере.
  </p>
  <p class="philosophy-basic-text basic-text">
    Концентрация на долгосрочном сотрудничестве является нашим главным приоритетом. Результат работы за прошедший период служит нам мощным мотиватором для работы над собой и над улучшением качества бизнеса.
  </p>
</section>


<div class="cooperation-banner fs-banner">
  <div class="fs-banner-shadow cooperation-banner-shadow">
    <div class="fs-banner-shadow-bg cooperation-banner-shadow-bg"></div>
    <div class="fs-banner-content cooperation-banner-content">
      <p class="basic-title cooperation-banner-title">Давайте сотрудничать</p>
      <p class="basic-text cooperation-banner-text">позвоните нам и узнайте о специальных предложениях</p>
    </div>
    <div class="fs-banner-rect cooperation-banner-rect"></div>
  </div>
  <div class="fs-banner-info cooperation-banner-info">
  <p class="basic-title cooperation-banner-info-title">+7 (812) 329 05 05</p>
  <a class="cooperation-banner-info-link" href="call.html">Заказать звонок</a>
  </div>
  </div>

@endwhile
@endsection
