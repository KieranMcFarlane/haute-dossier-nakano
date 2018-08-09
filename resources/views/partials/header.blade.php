<div id="header" class="banner site-header desktop-nav">
  <div class="site-header__inner">
    <div class="site-header__logo">
      <a href="<?php echo get_home_url(); ?>" class="brand">
        <img src="@asset('images/haute-dossier-logo.svg')" alt="<?php echo get_bloginfo('name'); ?>" class="logo">
      </a>
    </div>
    <div class="site-header__navigation">
      @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
    </div>
    <button style="display: none;" class="mobile-nav-button hamburger hamburger--collapse" data-menuid="id-1" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
  </div>
</div>
