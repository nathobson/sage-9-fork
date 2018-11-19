<footer class="page-footer">

  <div class="inner">

    <div class="page-footer__left">

      <div class="page-footer__logo">
        @svg('bonhill-logo-reverse.svg')
      </div>
      
      <p class="page-footer__credit"><a href="https://www.carrkamasa.co.uk" target="_blank" class="no-decoration">Website design &amp; development by Carr Kamasa Design</a></p>

    </div>

    <div class="page-footer__navs">

      <div class="page-footer__nav-left">
          @if (has_nav_menu('footer_navigation_left'))
            {!! wp_nav_menu(['theme_location' => 'footer_navigation_left', 'menu_class' => 'nav navbar-nav']) !!}
          @endif
      </div>

      <div class="page-footer__nav-right">
          @if (has_nav_menu('footer_navigation_right'))
            {!! wp_nav_menu(['theme_location' => 'footer_navigation_right', 'menu_class' => 'nav navbar-nav']) !!}
          @endif
      </div>
    
    </div>


  </div>

</footer>