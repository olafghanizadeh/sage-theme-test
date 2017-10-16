@php($image_width = get_field( 'featured_image_condition' ))
@if($image_width == 'full-width')
  <div class="full-width" style="background: url('{{the_post_thumbnail_url()}}') {{the_field( 'Hero_background_color')}}">
    <h1 class="entry-title align-middle d-inline">{{ get_the_title() }}</h1>
  </div>
@else
  {{the_post_thumbnail('full', array( 'class' => 'img-fluid card-img-top' ))}}
@endif
