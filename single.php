<!-- single product -->
 <script src="js/shopnow.js"></script>

<?php
 get_header();
?>

 <div class="contanier" id="Scontent">
  <div class="row">
           <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <!-- <img class="img-responsive" src="http://placehold.it/800x300" alt=""> -->
                    <?php  the_post_thumbnail('thumbnail'); ?>
                </div>
            </div>
            <div class="col-md-6">
                  <h1><?php the_title() ?></h1>
                  <hr>
                  <!-- <h4 class="pull-center">price::</h4><?php $price=get_post_meta( $product_id, 'product_price', true );?> -->
                  
                  <hr>
                  <h4 class="pull-center">price::
                  <?php echo get_post_meta($post->ID, "price", true); ?>
                 </h4>
                  <div class="text-left">
                      <a href="http://localhost/round5-wordpress/wordpress/wp-content/themes/hospitals/bascket.php?page=cart<?php echo $row['id'] ?>"class="btn btn-warning"><img class="img-circle" src="<?php bloginfo('template_url'); ?>/images/icon1.jpg" width="30%" height="30%">Shop now</a>
                  <!-- <a href="<?php echo get_permalink(727) ?>"class="btn btn-warning"><img class="img-circle" src="<?php bloginfo('template_url'); ?>/images/icon1.jpg" width="30%" height="30%">Shop now</a> -->
                  <hr>
                  </div> 
                  <div class="description">Description:</div><br><br> 
                   <div class="comment">
                    <button class="btn btn-success pull-left">Leave a Review</button><br><br>
                    <textarea class="pull-bottom">
                      <?php get_template_part('comment','post');?>
                    </textarea>
                    </div>
              </div>

  </div>
</div>	
<?php get_footer();?>

