<section class="navigation-bar">

  <div class="navigation-bar__logo">
    <a href="/">
      @svg('bonhill-logo.svg')
    </a>
  </div>

  <div class="navigation-bar__navigation-container">

    <nav role="navigation" class="navigation-bar__navigation clearfix">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']) !!}
      @endif
    </nav>
    
  </div>

  <div id="mobile-menu__trigger">
    <span class="line line-1"></span>
    <span class="line line-2"></span>
    <span class="line line-3"></span>
  </div>

  <div id="mobile-nav">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']) !!}
    @endif
  </div>


</section>