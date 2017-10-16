<div class="row">
  <div class="col-md-8 col-sm-12">
<div class="card mb-5">
  <article @php(post_class())>
    @include('partials/hero-image')
    <div class="card-block">
  <header class="entry-header mt-4">
    @include('partials/entry-meta')
    <h1 itemprop="name" class="entry-title">{{ get_the_title() }}</h1>
  </header>
  <div class="entry-content card-text">
    @php(the_content())
  </div>
</div>
</div>
</div>
{{-- Include Article sidebar --}}
@include('partials/single-post-sidebar')

</div>

  {{-- Include Article footer --}}
  @include('partials/single-post-footer')
</article>
