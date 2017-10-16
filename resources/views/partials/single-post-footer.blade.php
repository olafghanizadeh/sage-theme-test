<footer class="full-width article-footer">

  <div class="container">
  {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  @php(comments_template('/partials/comments.blade.php'))
</div>
</footer>
