<div class="pt-5">
              <h3 class="mb-5"><?php get_comments_number(); ?> Comments</h3>
              <?php foreach($comments as $comment){?> 
              
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                      <?php get_avatar($comment, 60, '', '');  ?>
                    <!-- <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/person_2.jpg" alt="Free Website Template by Free-Template.co"> -->
                  </div>
                  <div class="comment-body">
                    <h3><?php comment_author();  ?></h3>
                    <div class="meta"><?php  comment_date(); ?></div>
                    <p><?php comment_text();  ?></p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>
              </ul>

              <?php }
                the_comments_pagination();
              ?>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary btn-md text-white">
                  </div>

                </form>
              </div>
            </div>
