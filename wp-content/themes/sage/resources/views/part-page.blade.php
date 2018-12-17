{{--
  Template Name: Партнеры
--}}
@extends('layouts.app-min')
@section('content')
@while(have_posts()) @php the_post() @endphp
<section class="partners" id="section5Partners">
  <span class="double-slash">//</span>
  <h2 class="partners-title basic-title" id="partners">Партнеры и линии</h2>

  <ul class="partners-list">
    <li class="partners-item">
      <!--1-->
      <a href="#"><img src="img/hapag-lloyd.png" width="auto" height="auto" alt="Hapag-Lloyd"></a>
    </li>
    <li class="partners-item">
      <!--2-->
      <a href="#"><img src="img/yang-ming.png" width="auto" height="auto" alt="Yang-Ming"></a>
    </li>
    <li class="partners-item">
      <!--3-->
      <a href="#"><img src="img/seago.png" width="auto" height="auto" alt="Seago-line"></a>
    </li>
    <li class="partners-item">
      <!--4-->
      <a href="#"><img src="img/x-press.png" width="auto" height="auto" alt="Xpress-feeders"></a>
    </li>
    <li class="partners-item">
      <!--5-->
      <a href="#"><img src="img/cma.jpg" width="auto" height="auto" alt="CMA-CGM"></a>
    </li>
    <li class="partners-item">
      <!--6-->
      <a href="#"><img src="img/one.png" width="auto" height="auto" alt="One. Ocean nerwork express"></a>
    </li>
    <li class="partners-item">
      <!--7-->
      <a href="#"><img src="img/evergreen.jpg" width="auto" height="auto" alt="Evergreen"></a>
    </li>
    <li class="partners-item">
      <!--8-->
      <a href="#"><img src="img/fesco.png" width="auto" height="auto" alt="fesco"></a>
    </li>
    <li class="partners-item">
      <!--9-->
      <a href="#"><img src="img/safmarine.png" width="auto" height="auto" alt="Safmarine"></a>
    </li>
    <li class="partners-item">
      <!--10-->
      <a href="#"><img src="img/streamlines.png" width="auto" height="auto" alt="Streamlines"></a>
    </li>
    <li class="partners-item">
      <!--11-->
      <a href="#"><img src="img/humburg.png" width="auto" height="auto" alt="Humburg-sud"></a>
    </li>
    <li class="partners-item">
      <!--12-->
      <a href="#"><img src="img/maersk.png" width="auto" height="auto" alt="Maersk"></a>
    </li>
    <li class="partners-item">
      <!--13-->
      <a href="#"><img src="img/apl.jpg" width="auto" height="auto" alt="APL"></a>
    </li>
    <li class="partners-item">
      <!--14-->
      <a href="#"><img src="img/oocl.png" width="auto" height="auto" alt="oocl"></a>
    </li>
    <li class="empty-flex"></li>
    <!--15 Пустой элемент нужен для ровности сетки-->
  </ul>
</section>
      <div class="partners-banner fs-banner">
        <div class="fs-banner-shadow cooperation-banner-shadow">
          <div class="fs-banner-shadow-bg cooperation-banner-shadow-bg"></div>
          <div class="fs-banner-content cooperation-banner-content">
            <p class="basic-title cooperation-banner-title">Хотите стать нашим клиентом?</p>
            <p class="basic-text cooperation-banner-text">позвоните или напишите нам, и мы предложим условия, подходящие именно вам</p>
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
