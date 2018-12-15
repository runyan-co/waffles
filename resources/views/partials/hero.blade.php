@php

/**
 * Full-width hero template
 * 
 * @param $is_fullheight bool
 * @param $hero_classes mixed
 * @param $include_header bool
 * @param $include_footer bool
 */
$is_fullheight = ! empty( $is_fullheight ) && $is_fullheight ? ' is-fullheight' : '';
$hero_classes = ! empty( $hero_classes ) ? 'hero ' . $hero_classes . $is_fullheight : 'hero';
$include_header = ! empty( $include_header ) ? $include_header : false;
$include_footer = ! empty( $include_footer ) ? $include_footer : false;

/**
 * ACF fields for actual content
 */
// Hero header content
$hero_header_content = get_field('field_5c15527db1759');
// Primary header content
$hero_body_content = get_field('field_5c155227b1757');
// Hero footer content
$hero_footer_content = get_field('field_5c15529f0bd5d'); @endphp

<!-- Begin Hero -->
<section class="{{ $hero_classes }} has-text-centered">
@if( $include_header )
@include('partials.hero.content-head', [ 'hero_header_content' => $hero_header_content ])
@endif
@include('partials.hero.content-body')
@if( $include_footer )
@include('partials.hero.content-footer', [ 'hero_footer_content' => $hero_footer_content ])
@endif
</section>
<!-- End Hero -->