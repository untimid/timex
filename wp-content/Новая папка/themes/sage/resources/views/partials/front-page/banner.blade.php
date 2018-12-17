@php $banner = get_field('наши_принципы_и_достижения'); @endphp
@if ($banner)
  <div class="services-banner">
    <div class="services-banner-shadow">
      <div class="services-banner-shadow-bg"></div>
      <div class="services-banner-shadow-content">
        <h3 class="services-banner-title">Наши принципы и достижения</h3>
        <div class="services-banner-shadow-text-cont">
          <p class="services-banner-shadow-title">{{ $banner['заголовок'] }} <br>
            <span>{{ $banner['подзаголовок'] }}</span></p>
          <p class="services-banner-shadow-text basic-text">{{ $banner['текст'] }}</p>
        </div>
      </div>
      <div class="services-banner-shadow-rect"></div>
    </div>
  </div>
  </section>
@endif
