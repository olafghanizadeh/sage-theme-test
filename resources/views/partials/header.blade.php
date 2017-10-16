<nav class="navbar navbar-light bg-faded navbar-toggleable-md sticky-top container-fluid">
  <!-- Brand -->
  <a class="navbar-brand" href="{{ home_url('/') }}" title="{{ get_bloginfo('name', 'display') }}">
    <svg width="326" height="73" viewBox="0 0 326 73" xmlns="http://www.w3.org/2000/svg"><title>Slice</title><g fill="none" fill-rule="evenodd"><g fill-rule="nonzero"><path fill="#4B6DAA" d="M0 26h18v47H0z"/><circle fill="#D8A852" cx="9" cy="61" r="5"/><path d="M67.7 33.7c0-2.86-2.35-5.18-5.24-5.18h-20.4l1.28-6c1-4.56.72-10.12.14-14.04C42.9 4.58 39.36 0 35.66 0h-.3c-3.16 0-4.3 3.45-4.3 7.78 0 21.06-10.45 20.74-10.45 20.74H18V70h37.9c2.9 0 5.23-2.32 5.23-5.2 0-2.85-2.34-5.17-5.23-5.17h3.93c2.88 0 5.23-2.32 5.23-5.2 0-2.85-2.35-5.17-5.23-5.17h3.92c2.9 0 5.23-2.32 5.23-5.2 0-3.22-2.1-4.45-5.23-4.9-1.52-.23-4.28-.27-5.23-.27h3.92c2.9 0 5.23-2.34 5.23-5.2z" fill="#FBCE9D"/><path d="M65.9 38H49.3c-.7 0-1.3.67-1.3 1.5s.6 1.5 1.3 1.5H67c-.86-.6-1.96-.98-3.23-1.2-1.53-.25-4.3-.3-5.26-.3h3.97c1.32 0 2.52-.58 3.44-1.5zM67 48H49.3c-.72 0-1.3.67-1.3 1.5s.58 1.5 1.3 1.5h13.8c-.9-.92-2.1-1.5-3.4-1.5h3.9c1.3 0 2.5-.58 3.4-1.5zm-4 11H46.32c-.73 0-1.32.67-1.32 1.5s.6 1.5 1.32 1.5h12.72c-.93-.92-2.14-1.5-3.47-1.5h3.97c1.33 0 2.53-.58 3.46-1.5z" fill="#F7B563"/></g><text font-family="LeagueSpartan-Bold, League Spartan" font-size="48" font-weight="bold" fill="#696969"><tspan x="92" y="67">Best i test</tspan></text></g></svg>
  </a>
<!-- Links -->
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu([
      'theme_location' => 'primary_navigation',
      'walker'  => new bs4navwalker(),
      'menu_class' => 'navbar-nav col-md-4 offset-md-4 justify-content-end'])
    !!}
  @endif
</nav>
