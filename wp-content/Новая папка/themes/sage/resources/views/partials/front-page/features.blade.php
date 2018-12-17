@php $features = get_field('почему_мы') @endphp
@if ($features)
  <section class="feature" id="section3">
    <span class="double-slash">//</span>
    <h2 class="feature-title basic-title" id="feature">{{ $features['заголовок'] }}</h2>
    <ul class="feature-list">
      @php
        $featuresList = $features['список'];
        $index = 1;
      @endphp

      @foreach($featuresList as $item)
        <li class="feature-item">
        <!-- {{ $index }} -->
          <div class="feature-item-icon" style="background-image: url({{ $item['изображение'] }})"></div>
          <p class="feature-item-title">{{ $item['заголовок'] }}</p>
          <p class="feature-item-text">{{ $item['текст'] }}</p>
        </li>

        @php $index += 1 @endphp
      @endforeach
    </ul>
  </section>
@endif
