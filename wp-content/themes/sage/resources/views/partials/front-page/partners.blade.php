@php
  $partners = get_field('наши_партнёры');
  $index = 1;
  $itemsCount = count($partners['список']);
  $itemsInRow = 5;
  $emptyItemsNeeded = ($itemsCount % $itemsInRow) ? $itemsInRow - $itemsCount % $itemsInRow : 0;

  for ($i = 0; $i < $emptyItemsNeeded; $i++) {
    // Добавляем пустые элементы для вёрстки
    array_push($partners['список'], ['is_empty' => true]);
  }
@endphp

@if ($partners)
  <section class="partners" id="section5">
    <span class="double-slash">//</span>
    <h2 class="partners-title basic-title" id="partners">{{ $partners['заголовок'] }}</h2>

    <ul class="partners-list">
      @foreach ($partners['список'] as $item)

        @if (empty($item['is_empty']))
          <li class="partners-item">
          <!-- {{ $index }} -->
            <a href="{{ $item['ссылка'] }}">
              <img src="{{ $item['изображение'] }}" width="auto" height="auto" alt="{{ $item['название'] }}">
            </a>
          </li>
        @else
          <li class="empty-flex">
          <!-- {{ $index }} Пустой элемент нужен для ровности сетки-->
          </li>
        @endif

        @php $index += 1 @endphp
      @endforeach
    </ul>
  </section>
@endif
