{{-- Шаблон для главной страницы --}}

{{-- Расширяем блок CONTENT основного шаблона LAYOUTS.APP --}}
@extends('layouts.app')
@section('content')

  {{--

    Основные моменты с шаблонами blade:

    1) Доступны все конструкции php (if, else, foreach и т.д.)
    2) Блок чистого php можно вставить конструкцией @php / @endphp
    3) Вставить значение переменной с экранированием html (нужно для безопасности) -> {{ $переменная }}
    4) Вставить значение переменной, содержащей html -> {!! $переменная_с_html !!}

  --}}

  {{-- Получаем информацию о странице/посте/архиве (обязательное действие в WP) --}}
  @while(have_posts()) @php the_post() @endphp

    {{-- Небольшие блоки, контент которых не нужно менять в админке можем оставить в шаблоне как есть 👇 --}}
    <main>
      <div class="key-indicators">
        <div class="key-indicators-item">
          <span class="double-slash">//</span>
          <span class="key-indicators-text-bold">5000+</span>
          <span class="key-indicators-text">контейнеров в год перевозятся с нашей помощью</span>
        </div>
        <div class="key-indicators-item">
          <span class="double-slash">//</span>
          <span class="key-indicators-text-bold">100%</span>
          <span class="key-indicators-text">выполнение обязательств перед клиентами</span>
        </div>
        <div class="key-indicators-item">
          <span class="double-slash">//</span>
          <span class="key-indicators-text-bold">24/7</span>
          <span class="key-indicators-text">работаем 24 часа 7 дней в неделю</span>
        </div>
      </div>

      {{-- Шаблон разбит на более мелкие части - подключаем их в нужном порядке 👇 --}}
      {{-- (имя - это путь к шаблону) --}}
      @include('partials.front-page.about')

      <section class="services" id="section2">
        @include('partials.front-page.services')
        @include('partials.front-page.banner')
      </section>

      @include('partials.front-page.features')
      @include('partials.news')
      @include('partials.front-page.partners')

    </main>

  @endwhile
@endsection
