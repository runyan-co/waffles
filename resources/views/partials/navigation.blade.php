@php
/**
 * Using this namespace to bring in the custom walker menu
 */
use App\Controllers;

$navbar_background_type = validate( $navbar_background_type, 'is-primary is-bold' ); @endphp
<nav class="navbar {{ $navbar_background_type }}" role="navigation">
  <div class="container">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{ home_url('/') }}">
        <img class="brand" src="@asset('images/logo.svg')" alt="Runyan Co.">
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-end">
      @php
        wp_nav_menu([
            'theme-location' => 'nav-menu',
            'depth' => 2,
            'container' => 'navbar-end',
            'items_wrap' => '%3$s',
            'walker' => new App\Controllers\Walker
        ]);
      @endphp
    </div>
  </div>
  </div>
</nav>