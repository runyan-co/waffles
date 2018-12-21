{{-- 
  /**
   * Template Name: Hero Only
   */
--}}
@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  @php the_content(); @endphp

    @if( $hero_is_visible )
      @include('partials.hero', [
        'hero_classes'   => 'is-primary is-bold',
        'is_fullheight'  => $hero_is_fullheight,
        'include_header' => $hero_has_header,
        'include_footer' => $hero_has_footer
      ])
    @endif

  @endwhile
@endsection
