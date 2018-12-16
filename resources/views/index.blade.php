@extends('layouts.full-width')

@section('content')
  @include('partials.navigation', [
    'navbar_background_type' => 'is-primary is-bold'
  ])
  <section class="section">
    <div class="container">
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
    </div>
  </section>

@endsection
