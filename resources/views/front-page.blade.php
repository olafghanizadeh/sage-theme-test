{{--
  Template Name: Front page template
--}}

@extends('layouts.app')
@section('content')
  @if(have_posts())
    <div class="row">
    @php(the_post())
    <div class="featured-post card">
      {{the_post_thumbnail( 'large', array( 'class' => 'img-fluid') )}}
        <div class="card-block">
          <h2><a href="{{the_permalink()}}">{{the_title()}}</a></h2>
          {{the_excerpt()}}
        </div>
    </div>
  </div>
  @endif
  @php($count = 0)
  <div class="subtitle-container">
  <h3 class="display-4 mt-5">
    Test
  </h3>
  </div>
  <div class="row mt-5">
  @while(have_posts() && $count < 9)
      @php(the_post())
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
          <div class="card card-hover h-100">
          {{the_post_thumbnail( 'card-image', array( 'class' => 'img-fluid') )}}
            <div class="card-block">
              <h2 class="card-title"><a href="{{the_permalink()}}">{{the_title()}}</a></h2>
            {{the_excerpt()}}
          </div>
        </div>
      @php($count++)
    </div>
  @endwhile
  </div>
  <div class="card-deck mt-5 mb-5">
  @while(have_posts())
    @php(the_post())
      <div class="card">
        {{the_post_thumbnail( 'thumbnail', array( 'class' => 'card-img-top img-fluid' ) )}}
        <div class="card-block">
        <a href="{{the_permalink()}}"><h2>{{the_title()}}</h2></a>
        {{-- {{the_excerpt()}} --}}
        </div>
    </div>
  @endwhile
</div>
@endsection


{{-- @include('partials.page-header')
@include('partials.content-page') --}}
