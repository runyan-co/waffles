@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    
    @php
    /**
    * Hero template options
    */
      $hero_is_visible = get_field('field_5c15524cb1758');
      $hero_has_header = get_field('field_5c15518a6f907');
      $hero_has_footer = get_field('field_5c1551d36f908');
      $hero_is_fullheight = get_field('field_5c1551fc6f909');
    @endphp

    @if( $hero_is_visible )
      @include('partials.hero', [
        'hero_classes'   => 'is-primary is-bold',
        'is_fullheight'  => $hero_is_fullheight,
        'include_header' => $hero_has_header,
        'include_footer' => $hero_has_footer
      ])
    @endif

    @include('partials.content-page')
  @endwhile
@endsection
