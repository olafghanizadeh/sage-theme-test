@if($category)
  <span class="category badge badge-default">
    {{$category->name}}
  </span>
@endif


<time itemprop="datePublished" class="published" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
<time itemprop="dateModified" class="updated" datetime="{{ the_modified_time('c', true) }}">{{ the_modified_time('F j, Y') }}</time>
{{-- <p class="byline author vcard">
  {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}
  </a>
</p> --}}
