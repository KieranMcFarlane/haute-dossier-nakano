    @php
        $featured_image = get_field('secondary_hero');
        $featured_image_URL = $featured_image['url'];
    @endphp

<article @php(post_class())>
    @include('partials.page-header')
  <div class="container post-container entry-content">
    @php(the_content())
  </div>
  <div style="background-image: url( <?php echo $featured_image_URL; ?> );" class="sec-featured-image">
  </div>
</article>
<div class="share-post">
  <div class="jump-to__section">
      <span class="jump-text">Share this story:</span>
        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>">Facebook</a>
        <a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>">Twitter</a>
    </div>
</div>

