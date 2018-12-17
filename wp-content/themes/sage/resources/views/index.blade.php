{{-- Запасной шаблон, если для страницы нет более подходящего шаблона --}}
{{-- @see https://wp-kama.ru/id_7654/ierarhiya-fajlov-temy-shablona.html --}}

@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
