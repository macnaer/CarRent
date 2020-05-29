<?php
/**
* Template Name: blog
*/
?>
<?php get_header('internal'); ?>
<div class="site-section bg-light">
      <div class="container">
        <div class="row">

        <?php 

            $args = array(
                'post_type'=> 'post',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => -1 // this will retrive all the post that is published 
                );
                $result = new WP_Query( $args );
            if ( $result-> have_posts() ) : ?>
            <?php while ( $result->have_posts() ) : $result->the_post(); ?>
        
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="post-entry-1 h-100">
                <a href="<?php the_permalink(); ?>">
                   <?php the_post_thumbnail(); ?>
                </a>
                <div class="post-entry-1-contents">
                    
                    <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?>  </a></h2>
                    <span class="meta d-inline-block mb-3"><?php echo get_the_date()?> <span class="mx-2">by</span> <a href="#"><?php the_author(); ?></a></span>
                    <p><?php the_excerpt() ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
                </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
            <div class="col-12">
                <span class="p-3">1</span>
                <a href="#" class="p-3">2</a>
                <a href="#" class="p-3">3</a>
                <a href="#" class="p-3">4</a>
            </div>
        </div>
      </div>
    </div>

    <div class="container site-section mb-5">
      <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>How it works</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
        </div>
      </div>
      <div class="how-it-works d-flex">
        <div class="step">
          <span class="number"><span>01</span></span>
          <span class="caption">Time &amp; Place</span>
        </div>
        <div class="step">
          <span class="number"><span>02</span></span>
          <span class="caption">Car</span>
        </div>
        <div class="step">
          <span class="number"><span>03</span></span>
          <span class="caption">Details</span>
        </div>
        <div class="step">
          <span class="number"><span>04</span></span>
          <span class="caption">Checkout</span>
        </div>
        <div class="step">
          <span class="number"><span>05</span></span>
          <span class="caption">Done</span>
        </div>

      </div>
    </div>
<?php get_footer(); ?>