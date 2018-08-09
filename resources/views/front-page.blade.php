{{--
  Template Name: Homepage
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    {{-- @include('partials.page-header') --}}
    <section class="hero__section container">
      <h2 class="thin-header">The leading travel and dining blog lorem ipsum</h2>
      <div class="jump-to__section">
        <span class="jump-text">Jump to:</span>
        <a href="#travel-section">Travel</a>
        <a href="#travel-section">Dining</a>
      </div>
    </section>
    <section class="featured-posts">
        <div class="container">
      <h2 class="section-header">Featured Posts</h2>

      <?php

      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5
      );
      
      // The Query
      $the_query = new WP_Query( $args );
      
      // The Loop
      if ( $the_query->have_posts() ) {
      ?>
        <div class="post-card__container">
            <?php
        while ( $the_query->have_posts() ) {
          $the_query->the_post();
          ?>
          <div class="post-card __lt-4">
            <div class="post-card__featured-image" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>);"></div>
            <div class="post-card__inner-container">
              <div class="post-card__cat-title__container">
              <?php 
              $categories = get_categories($args);
                foreach($categories as $category) { ?>
                  <div class="post-card__cat-title <?php echo ($category->name == 'Travel' ? 'travel-class' : ''); ?>"><a class="menu__link" href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></div>
                  <?php } ?>
              </div> 
              <div class="post-card__title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title();?></a></div>
              <a href="<?php the_permalink();?>" class="read-more">Read More</a>
            </div>
          </div>
        <?php
        }
        ?>
        </div>
        <?php
        wp_reset_postdata();
      } else {
        // no posts found
      }
      ?>
    </div>
    </section>
    @include('partials.content-page')

    <section class="destination__section container">
      <h2 class="section-header">Destination of the month</h2>
      <div class="destination__inner-section">
          <div class="manhattan__feature">
              <div class="manhattan__left __lt-6">
                  <img src="@asset('images/manhattan.svg')">
              </div>
              <div class="manhattan__right __lt-6">
                <h3>Our destination of the month for April is MANHATTAN.</h3>
                <p>We have put together a 7 day 6 night itinerary for your perfect trip to the big apple.</p>
                <p>Donec iaculis tincidunt semper rutrum dictumst dui mattis convallis fusce a ad torquent nostra a ac.Fames varius parturient tellus nec condimentum sagittis adipiscing fringilla in a habitasse.</p>
                <p>Scelerisque cubilia condimentum parturient urna congue condimentum praesent ligula eu adipiscing nisl dignissim mattis a porttitor fusce fringilla a varius condimentum potenti eu litora cum ullamcorper.A quisque vel a mus torquent a dolor eu egestas et condimentum sociosqu tellus id posuere habitasse eu nisl dolor sem sodales.</p>
                <a class="button" href="">Contact Us</a>
              </div>
          </div>
      </div> 

    </section>
    @php
    @endphp
    <section class="travel__section">
      <h2>Top Travel Posts</h2>
    </section>
    <section class="dining__section">
        <h2>Top Dining Posts</h2>
    </section>

    <section class="instagram__section">
        <div class="instgram__header">
          <img src="@asset('images/instagram.svg')">
          <h2>See what we've been up to</h2>
        </div>
    </section>
  @endwhile
@endsection
