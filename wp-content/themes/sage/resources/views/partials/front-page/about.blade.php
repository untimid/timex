@php $about = get_field('кто_мы') @endphp
@if ($about)
  <section class="about" id="section1">
    <span class="double-slash">//</span>
    <h2 class="about-title basic-title" id="about">{{ $about['заголовок'] }}</h2>
    <div class="about-cont">
      <div class="about-basic">
        <p class="about-text extra-text">{{ $about['подзаголовок'] }}</p>
        {!! $about['текст'] !!}
      </div>

      <div class="about-more">
        {!! $about['блок_справа'] !!}
      </div>
    </div>
  </section>
@endif
