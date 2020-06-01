<div class="pt-5">
              <h3 class="mb-5"><?php comments_number(); ?></h3>
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
            <div id="respond" class="clearfix">
 
        <?php
    
        comment_form([
            'comment_field'  =>  '<div class="clear"></div>
    
                <div class="comment-form-wrap pt-5">
                    <label class="mb-5">Comment</label>
                    <textarea name="comment" cols="30" rows="10" class="form-control"></textarea>
                </div>',
            'fields'  =>  [
                'author'            =>
                '<div class="form-group">
                            <label>' . __('Name', 'udemy') . '</label>
                            <input type="text" name="author" class="form-control" />
                        </div>',
                'email'             =>
                '<div class="form-group">
                            <label>' . __('Email', 'udemy') . '</label>
                            <input type="text" name="email" class="form-control" />
                        </div>',
                'url'               =>
                '<div class="form-group col_last">
                            <label>' . __('Website', 'udemy') . '</label>
                            <input type="text" name="url" class="form-control" />
                        </div>'
            ],
            'class_submit'          =>  'btn btn-primary btn-md text-white',
            'label_submit'          =>  __('Post Comment', 'udemy'),
            'title_reply'           =>  __('Leave a <span>Comment</span>', 'udemy')
        ]);
    
        ?>
    
    </div>