{{-- 
    Template Name: Empty Full-Width
--}}

@extends('layouts.app')

@section('content')
@include('partials.hero');
<section class="section">
    @while(have_posts()) @php the_post() @endphp
        <div class="columns">
        @include('partials.content-page')
        </div> <!-- /.columns -->
    @endwhile
</section>
@endsection
