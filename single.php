

<?php
 get_header();
?>
 <div class="contanier" id="Scontent">
  <div class="row">
           <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="thumbnail pic">
                    <!-- <img class="img-responsive" src="http://placehold.it/800x300" alt=""> -->
                  <div class="pic2"> <?php  the_post_thumbnail('thumbnail'); ?></div> 
                </div>
            </div>
            <div class="col-md-6">
                        <h1><?php the_title() ?></h1>
                        <hr>
                        <h4 class="pull-center">$price:</h4>
                        <div class="text-left">
                            <a class="btn btn-warning"><img class="img-circle" src="<?php bloginfo('template_url'); ?>/images/icon1.jpg" width="30%" height="30%">Shop now</a>
                        <hr>
                        </div> 
                       <div class="description">
                         
                       </div> 
                       <div class="comment">
                        <button class="btn btn-success pull-left">Leave a Review</button><br><br>
                        <textarea class="pull-bottom">
                          <?php comments_template(); ?>
                        </textarea>
                        </div>
                </div>

    </div>


</div>
 	
<?php get_footer();?>

