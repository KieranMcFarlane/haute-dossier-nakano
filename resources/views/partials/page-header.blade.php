<?php $subtitle = get_field('subtitle'); ?>

<section class="hero__section container">
    <h2 class="thin-header">{!! App::title() !!}</h2>
    @if(is_category( 'Travel' ))<p class="thin-header header-subtitle">We give you the most current news on the best places to travel in the world</p>@endif
    @if(is_category( 'dining' ))<p class="thin-header header-subtitle">We give you the most current news on the best places to travel in the world</p>@endif
    @if(is_single())<p class="thin-header header-subtitle"><?= $subtitle; ?></p>@endif
  </section>


 
