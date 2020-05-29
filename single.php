<?php  get_header('internal'); ?>

    <?php 
    if (have_posts()){
        while(have_posts()){
            the_post();
            global $post;
            $author_ID = $post->post_author;
            $author_URL = get_author_posts_url($author_ID);

    
     ?>       
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">
            <h1><?php the_title();  ?></h1>
            <?php the_post_thumbnail(); ?>
            <span>Author <?php the_author(); ?></span>
            <span>Post date <?= get_the_date(); ?></span>
            <?php the_content(); ?>


            <div class="pt-5">
              Categorias: <?php the_category();  ?>
            </div>
            <?php 
                }
            }
            ?>

            
              
          </div>
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Creatives <span>(12)</span></a></li>
                <li><a href="#">News <span>(22)</span></a></li>
                <li><a href="#">Design <span>(37)</span></a></li>
                <li><a href="#">HTML <span>(42)</span></a></li>
                <li><a href="#">Web Development <span>(14)</span></a></li>
              </div>
            </div>
            <div class="sidebar-box">
                <?php get_avatar( $author_ID, 90, '', false ); ?>
              <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/person_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-4 w-50 rounded-circle">
              <h3 class="text-black">About The Author</h3>
              <?php the_author(); ?>
              <p>Author description</p>
              <p><a href="#" class="btn btn-primary btn-md text-white">Read More</a></p>
            </div>

            <div class="sidebar-box">
              <h3 class="text-black">Paragraph</h3>
              <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
            </div>
          </div>
        </div>
        <?php 
            if (comments_open() || get_comments_number()){
                comments_template();
            }
        ?>
      </div>
    </div>

<?php get_footer(); ?>