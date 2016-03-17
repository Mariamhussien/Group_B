

<?php
 get_header();?>
?>
 <div class="contanier" id="Scontent">
  <div class="row">
            <div class="col-md-12">
                <div class="thumbnail">
                    <!-- <img class="img-responsive" src="http://placehold.it/800x300" alt=""> -->
                    <?php  the_post_thumbnail('thumbnail'); ?>
                    <div class="caption-full">
                        <h4 class="pull-right">$price</h4>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
		      
                        </h4>
                     
                    </div>
                    <div class="ratings">
                         <div class="text-right">
                        <a class="btn btn-warning">Shop now</a>
                    </div>

                        
                    </div>
                </div>

                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-success">Leave a Review</a>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                           
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            
                        </div>
                    </div>

                </div>

            </div>

        </div>


</div>
 	
<?php get_footer();?>

