<section class="dining__section">
        <div class="container">
      <h2 class="section-header">Top Dining Posts</h2>

      <?php

      $args = array(
        'post_type' => 'post',
        'category_name' => 'dining',
        'posts_per_page' => -1
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