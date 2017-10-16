<div class="col-md-4">
@foreach ($related_posts as $related_post)
  <div class="card mb-4">
    <a href="{!! $related_post->permalink !!}">
      {!! $related_post->thumbnail !!}
    <div class="card-block">
      <h3>{!! $related_post->title !!}</h3>
    </div>
  </div>
  </a>
@endforeach
</div>
