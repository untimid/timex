{{--
  Template Name: carriage
--}}
@extends('layouts.app-services')
@section('content')
@while(have_posts()) @php the_post() @endphp

<section class="basic-section carriage" id="section1Carriage">
  <span class="double-slash">//</span>
  <h2 class="carriage-title basic-title">Транспортно-экспедиторские услуги</h2>
  <div class="about-cont carriage-cont">
    <div class="carriage-basic about-basic">
  <p class="carriage-exta-text extra-text">Группа компаний "Таймекс" оказывает клиентам полный комплекс транспортно-логистических услуг на внутреннем и международном рынках.</p>

    <p class="basic-text carriage-text">Мы организуем и сопровождаем грузоперевозки разными видами транспорта, осуществляем перевалку грузов в порту, обеспечиваем погрузо-разгрузочные работы, контролируем внутрипортовое экспедирование, хранение грузов и документальное сопровождение операций. Мы берем на себя решение всех  вопросов, возникающих в процессе перевозки, и координируем слаженную работу всех участников процесса. Логистические схемы, которые создают наши специалисты, охватывают все страны.</p>
  </div>
  <div class="carriage-more about-more">
      <span class="carriage-more-title">мы помогаем осуществлять самые смелые и амбициозные проекты наших клиентов</span>
  </div>
  </div>
</section>

<section class="philosophy basic-section" id="section2Carriage">
  <span class="double-slash">//</span>
  <h2 class="carriage-title basic-title">Мы предлагаем</h2>

  <div class="basic-double-list carriage-double-list">
    <div class="basic-list-cont carriage-list-forwarding">
      <h3 class="basic-list-title">Экспедиторские услуги</h3>
      <ul class="basic-list forwarding-list">
        <!--1-->
        <li class="basic-list-item forwarding-list-item">
          <div class="icon-basic-list-item icon-forwarding-item"></div>
          <span>Грузоперевозки различными видами транспорта</span>
        </li>
          <!--2-->
        <li class="basic-list-item forwarding-list-item">
          <div class="icon-basic-list-item icon-forwarding-item"></div>
          <span>Внутрипортовое экспедирование</span>
        </li>
          <!--3-->
        <li class="basic-list-item forwarding-list-item">
          <div class="icon-basic-list-item icon-forwarding-item"></div>
          <span>Таможенный транзит</span>
        </li>
          <!--4-->
        <li class="basic-list-item forwarding-list-item">
          <div class="icon-basic-list-item icon-forwarding-item"></div>
          <span>Перевалка грузов в порту</span>
        </li>
          <!--5-->
        <li class="basic-list-item forwarding-list-item">
          <div class="icon-basic-list-item icon-forwarding-item"></div>
          <span>Обеспечение погрузо-разгрузочных работ</span>
        </li>
          <!--6-->
        <li class="basic-list-item forwarding-list-item">
          <div class="icon-basic-list-item icon-forwarding-item"></div>
          <span>Хранение грузов и документальное сопровождение операций</span>
        </li>
          <!--7-->
        <li class="basic-list-item forwarding-list-item">
          <div class="icon-basic-list-item icon-forwarding-item"></div>
          <span>Организация специальных проектов (опасные, негабаритные грузы и др.)</span>
        </li>
      </ul>
    </div>

    <div class="basic-list-cont carriage-list-transport">
      <h3 class="basic-list-title">Транспортные услуги</h3>
      <ul class="basic-list transport-list">
        <!--1-->
        <li class="basic-list-item transport-list-item">
          <div class="icon-basic-list-item icon-transport-item"></div>
          <span>Транспортировка  «от двери до двери»</span>
        </li>
          <!--2-->
        <li class="basic-list-item transport-list-item">
          <div class="icon-basic-list-item icon-transport-item"></div>
          <span>Мультимодальные перевозки</span>
        </li>
          <!--3-->
        <li class="basic-list-item transport-list-item">
          <div class="icon-basic-list-item icon-transport-item"></div>
          <span>Перевозка сборных грузов</span>
        </li>
          <!--4-->
        <li class="basic-list-item transport-list-item">
          <div class="icon-basic-list-item icon-transport-item"></div>
          <span>Международные железнодорожные перевозки</span>
        </li>
          <!--5-->
        <li class="basic-list-item transport-list-item">
          <div class="icon-basic-list-item icon-transport-item"></div>
          <span>Международные автомобильные перевозки</span>
        </li>
          <!--6-->
        <li class="basic-list-item transport-list-item">
          <div class="icon-basic-list-item icon-transport-item"></div>
          <span>Перевозки по территории России любыми видами транспорта</span>
        </li>
          <!--7-->
        <li class="basic-list-item transport-list-item">
          <div class="icon-basic-list-item icon-transport-item"></div>
          <span>Морские перевозки всеми контейнерными линиями, имеющими судозаходы в порты Санкт-Петербурга, Новороссийска, Владивостока, Находки</span>
        </li>

      </ul>
    </div>
  </div>
  <ul class="all-transport">
    <li class="services-item all-transport-item">
      <!--1-->
      <div class="services-item-cont all-transport-item-cont">
        <div class="services-item-cont-text all-transport-item-cont-text">
      <span class="services-item-slash transport-item-slash">//</span>
      <span class="services-item-number all-transport-item-title">Морские перевозки</span>
      </div>
      <div class="services-item-circle all-transport-circle all-transport-circle-1"></div>
      <span class="all-transport-description">Подходят, когда нужно перевезти много и дешево</span>
      </div>
    </li>
    <li class="services-item all-transport-item">
      <!--2-->
      <div class="services-item-cont all-transport-item-cont">
        <div class="services-item-cont-text all-transport-item-cont-text">
      <span class="services-item-slash transport-item-slash">//</span>
      <span class="services-item-number all-transport-item-title">Авиадоставка</span>
      </div>
      <div class="services-item-circle all-transport-circle-2 all-transport-circle"></div>
      <span class="all-transport-description">Перевозка небольшого и срочного груза</span>
      </div>
    </li>
    <li class="services-item all-transport-item">
      <!--3-->
      <div class="services-item-cont all-transport-item-cont">
        <div class="services-item-cont-text all-transport-item-cont-text">
      <span class="services-item-slash transport-item-slash">//</span>
      <span class="services-item-number all-transport-item-title">Ж/Д перевозки</span>
      </div>
      <div class="services-item-circle all-transport-circle-3 all-transport-circle"></div>
      <span class="all-transport-description">Когда нужно перевезти много и быстро</span>
      </div>
    </li>
    <li class="services-item all-transport-item">
      <!--4-->
      <div class="services-item-cont all-transport-item-cont">
        <div class="services-item-cont-text all-transport-item-cont-text">
      <span class="services-item-slash transport-item-slash">//</span>
      <span class="services-item-number all-transport-item-title">Автодоставка</span>
      </div>
      <div class="services-item-circle all-transport-circle-4 all-transport-circle"></div>
      <span class="all-transport-description">Подходит для любых задач</span>
      </div>
    </li>

  </ul>
</section>
<div class="carriage-banner1 fs-banner">
  <div class="fs-banner-shadow cooperation-banner-shadow">
    <div class="fs-banner-shadow-bg cooperation-banner-shadow-bg"></div>
    <div class="fs-banner-content carriage-banner1-content">
      <p class="basic-title cooperation-banner-title">Мы отвечаем за результат перед вами</p>
      <p class="basic-text cooperation-banner-text">берем на себя решение всех вопросов, возникающих в процессе перевозки и координируем слаженную работу участников</p>
    </div>
    <div class="fs-banner-rect cooperation-banner-rect"></div>
  </div>
  <a class="cooperation-banner-info-link carriage-banner1-link" href="call.html">Оставить заявку</a>
  </div>
  <section class="feature" id="section3Carriage">
    <span class="double-slash">//</span>
    <h2 class="feature-title basic-title" id="feature">Почему выбирают нас</h2>
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

    <div class="basic-banner carriage-banner2">
      <div class="basic-banner-shadow feature-banner-shadow">
        <div class="basic-banner-shadow-bg feature-banner-shadow-bg"></div>
        <div class="basic-banner-shadow-content carriage-banner2-shadow-content">
      <div class="feature-banner-shadow-text-cont">
      <p class="feature-banner-shadow-title">Работаем со всеми видами грузов</p>
      <p class="carriage-banner2-text">Наша специализация - перевозка скоропортящихся и контейнерных грузов (в том числе сборных). При этом мы обладаем компетенцией и богатым опытом в транспортировке опасных, негабаритных и прочих нестандартных грузов.</p>
        </div>
        </div>
        <div class="news-main-shadow-rect"></div>
      </div>
    </div>
  </section>
<section class="geo basic-section" id="section4Carriage">
  <span class="double-slash">//</span>
  <h2 class="geo-title basic-title" id="services">География</h2>
  <div class="geo-cont1">
  <div class="geo-map"></div>
    <span class="geo-text extra-text">Страны , в которых мы работаем:</span>
  <ul class="geo-list carriage-geo-list">
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
  <p class="geo-description">Для осуществления многих из этих поставок мы прибегали к услугам наших партнеров: Evergreen, Hapag-Lloyd, MSC, CMA CGM, Cosco, Maersk, Fesco, Safmarine, SEL, Yang-Ming, APL, SeaGo, Hambburgsud, OOCL, Team Line, ONE, Stream Line, X-Press Container Line, Sea Connect UAB</p>
  </div>
</section>
<section class="basic-section" id="section5Carriage">


<div class="pservices-exta-cont carriage-exta-cont">
<div class="requisites">
<span class="double-slash">//</span>
<h2 class="requisites-title basic-title">Стоимость</h2>
<p class="requisites-extra-text extra-text">
  Стоимость определяется, исходя из индивидуальных условий, с учетом:
</p>
<ul class="carriage-cost-list">
  <li class="carriage-cost-list-item"><span class="basic-text carriage-cost-list-text">Таможенной процедуры,</span></li>
  <li class="carriage-cost-list-item"><span class="basic-text carriage-cost-list-text">Номенклатуры товаров,</span></li>
  <li class="carriage-cost-list-item"><span class="basic-text carriage-cost-list-text">Количества товаров и артикулов в одной ДТ,</span></li>
  <li class="carriage-cost-list-item"><span class="basic-text carriage-cost-list-text">Региона оформления,</span></li>
  <li class="carriage-cost-list-item"><span class="basic-text carriage-cost-list-text">Количества транспортных средств в одной ДТ.</span></li>
</ul>
<span class="basic-text carriage-cost-posttext">Мы применяем гибкую систему скидок в зависимости от объема поставок</span>
</div>

<div class="write-to-us">
<span class="double-slash">//</span>
<h2 class="write-to-us-title basic-title">Напишите нам</h2>
<form class="write-to-us-form" action="#" method="post">
  <input class="write-to-us-form-field" type="text" name="write-to-us-form-name" value="" placeholder="Ваше имя">
  <input class="write-to-us-form-field" type="tel" name="write-to-us-form-phone" value="" placeholder="Телефон для связи">
  <input class="write-to-us-form-field" type="email" name="write-to-us-form-email" value="" placeholder="Почта для ответа">
  <textarea class="write-to-us-form-field" name="write-to-us-form-mes" rows="1" cols="1" placeholder="Сообщение"></textarea>
  <div class="write-to-us-form-cont">
    <div class="write-to-us-capcha"></div>
    <input class="write-to-us-btn" type="submit" value="Отправить">
  </div>
  <span class="write-to-us-posttext">Нажимая кнопку "Отправить",вы подтверждаете свое согласие на <a href="confidential.html">обработку персональных данных</a></span>
</form>
</div>
</div>
</section>

<div class="cooperation-banner fs-banner">
  <div class="fs-banner-shadow carriage-banner3-shadow">
    <div class="fs-banner-shadow-bg cooperation-banner-shadow-bg"></div>
    <div class="fs-banner-content cooperation-banner-content">
      <p class="basic-title cooperation-banner-title">Узнайте стоимость перевозки вашего груза</p>
      <p class="basic-text cooperation-banner-text">Мы ответим вам в течении рабочего дня, подберем оптимальные условия и рассчитаем стоимость</p>
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
