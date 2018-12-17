{{--
  Template Name: Хранение грузов
--}}
@extends('layouts.app-services')
@section('content')
@while(have_posts()) @php the_post() @endphp

<section class="basic-section carriage" id="section1Storage">
  <span class="double-slash">//</span>
  <h2 class="carriage-title basic-title">Консолидация и хранение грузов</h2>
  <div class="about-cont carriage-cont">
    <div class="carriage-basic about-basic">
  <p class="carriage-exta-text extra-text">Группа компаний ТАЙМЕКС  оказывает складские услуги на территории РФ, в портах и на терминалах за рубежом в рамках осуществления международной доставки грузов «от двери до двери»</p>

    <p class="basic-text carriage-text">Мы оказываем полный комплекс складских услуг, включая ответственное хранение, размещение грузов на складах временного хранения (СВХ) в России, обработку и консолидацию  грузов в странах отправления и транзита.</p>
  </div>
  <div class="carriage-more about-more">
      <span class="carriage-more-title">Здесь наверное тоже нужен текс? В макете нет этого блока. Место под него есть, а текста нет.</span>
  </div>
  </div>
</section>

<section class="philosophy basic-section" id="section2Storage">
  <span class="double-slash">//</span>
  <h2 class="carriage-title basic-title">Мы предлагаем</h2>

  <div class="basic-double-list storage-double-list">
    <div class="basic-list-cont storage-list1-cont">
      <ul class="basic-list storage-list1">
        <!--1-->
        <li class="basic-list-item storage-list1-item">
          <div class="icon-basic-list-item icon-list1-item1"></div>
          <span>ответственное хранение</span>
        </li>
        <!--2-->
        <li class="basic-list-item storage-list1-item">
          <div class="icon-basic-list-item icon-list1-item2"></div>
          <span>перетарка  без хранения и  с краткосрочным хранением</span>
        </li>
        <!--3-->
        <li class="basic-list-item storage-list1-item">
          <div class="icon-basic-list-item icon-list1-item3"></div>
          <span>взятие проб и образцов для проведения экспертиз, исследований для целей государственного (санитарно-эпидемиологического, ветеринарного, фитосанитарного, фумигационного и др.) и таможенного контроля</span>
        </li>
        <!--4-->
        <li class="basic-list-item storage-list1-item">
          <div class="icon-basic-list-item icon-list1-item4"></div>
          <span>формирование и предоставление отчетов по приёмке/ отгрузке товара на складе</span>
        </li>
        <!--5-->
        <li class="basic-list-item storage-list1-item">
          <div class="icon-basic-list-item icon-list1-item5"></div>
          <span>измерение температурного режима размещаемого на хранение груза</span>
        </li>
      </ul>
    </div>

    <div class="basic-list-cont storage-list-transport">
      <ul class="basic-list storage-list2-cont">
        <!--1-->
        <li class="basic-list-item storage-list2-item">
          <div class="icon-basic-list-item icon-list2-item1"></div>
          <span>погрузо-разгрузочные операции</span>
        </li>
        <!--2-->
        <li class="basic-list-item storage-list2-item">
          <div class="icon-basic-list-item icon-list2-item2"></div>
          <span>паллетирование, переупаковка, маркировка и стикировка  товара на складе</span>
        </li>
        <!--3-->
        <li class="basic-list-item storage-list2-item">
          <div class="icon-basic-list-item icon-list2-item3"></div>
          <span>контроль соблюдения условий хранения</span>
        </li>
        <!--4-->
        <li class="basic-list-item storage-list2-item">
          <div class="icon-basic-list-item icon-list2-item4"></div>
          <span>предоставление складских отчётов в необходимом клиенту формате</span>
        </li>
        <!--5-->
        <li class="basic-list-item storage-list2-item">
          <div class="icon-basic-list-item icon-list2-item5"></div>
          <span>контроль соблюдения условий хранения</span>
        </li>
        <!--6-->
        <li class="basic-list-item storage-list2-item">
          <div class="icon-basic-list-item icon-list2-item6"></div>
          <span>консолидация грузовых партий</span>
        </li>

      </ul>
    </div>
  </div>

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
  <section class="feature" id="section3Storage">
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
        <p class="feature-item-title">Качественный сервис</p>
        <p class="feature-item-text">Качественный сервис и профессиональные консультации по всем вопросам транспортно-экспедиционных услуг, услуг хранения, таможенного и гражданского законодательства</p>
      </li>
      <li class="feature-item">
        <!--3-->
        <div class="feature-item-icon feature-item-icon3"></div>
        <p class="feature-item-title">Полный комплекс услуг от одной компании</p>
        <p class="feature-item-text">Мы обеспечиваем полное сопровождение: транспортировку, консолидацию и хранение груза на складе, таможенное декларирование, представление интересов клиента в гос.органах (Россельхознадзор, Роспотребнадзор и
          т.д.)</p>
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
<section class="basic-section" id="section4Storage">

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
      <p class="basic-title cooperation-banner-title">Узнайте стоимость хранения вашего груза</p>
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
