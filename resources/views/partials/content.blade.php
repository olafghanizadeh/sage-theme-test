
<article @php(post_class())>
  <header>
    <h1 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>