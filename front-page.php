<?php get_header(); ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel"data-interval="3000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
     
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php bloginfo('template_url'); ?>/images/index_slide01.jpg" alt="...">
          <div class="carousel-caption">
              <h3>Caption Text</h3>
          </div>
        </div>
        <div class="item">
          <img src="<?php bloginfo('template_url'); ?>/images/index_slide02.jpg" alt="...">
          <div class="carousel-caption">
              <h3>Caption Text</h3>
          </div>
        </div>
          <div class="item">
            <img src="<?php bloginfo('template_url'); ?>/images/index_slide03.jpg" alt="...">
            <div class="carousel-caption">
                <h3>Caption Text</h3>
            </div>
          </div>
        </div>
       
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div> <!-- Carousel --><hr>
				<!--  -->
		<div class="jumbotron">
      <div class="row">
        <div class="col-md-4">
  		       <img class="cat"src="<?php bloginfo('template_url'); ?>/images/women1.jpg" alt="women">
  		   </div>
       <!-- // -->
       
  <!-- the_widget('LatestwomansWidget',$instance,$args);?> -->
  <?php
    $args = array(
                  'post_type'     => 'products',
                  'category_name'=>'women',
                  'posts_per_page'=> 3,
                  'order'         => 'id',
                  'orederby'      =>'rand'
     );
        $query = new WP_Query( $args );
         
         if($query->have_posts()):
          while ($query->have_posts()):
            $query->the_post();
          ?>
             <div class="col-md-2">
              <div class="thumbnail">
              <?php  the_post_thumbnail('thumbnail'); ?>
                <div class="caption">
                  <h3><?php the_title() ?></h3>
               <a href="<?php the_permalink()?>">  <button class="btn btn-success btn-block">Buy Now</button></a>
                </div>
              </div>
            </div>
    <?php
  endwhile;
 endif;
?> 
</div>
		</div><br><br>
    	
    
    

    <div class="jumbotron">
      <div class="row">
        <div class="col-md-4">
          <img class="cat"src="<?php bloginfo('template_url'); ?>/images/men1.jpg">
        </div>
      <!-- the_widget('LatestmenWidget',$instance,$args);?> -->
   <?php
    $args = array(
                  'post_type'     => 'products',
                  'category_name'=>'men',
                  'posts_per_page'=> 3,
                  'order'         => 'id',
                  'orederby'      =>'rand'
     );
        $query = new WP_Query( $args );
         
         if($query->have_posts()):
          while ($query->have_posts()):
            $query->the_post();
          ?>
             <div class="col-md-2">
              <div class="thumbnail">
            <?php  the_post_thumbnail('thumbnail'); ?>
                <div class="caption">
                  <h3><?php the_title() ?></h3>
                  <a href="<?php the_permalink()?>">  <button class="btn btn-success btn-block">Buy Now</button></a>
                
                </div>
              </div>
            </div>
    <?php
  endwhile;
 endif;
?> 
    </div>
    </div>
    <!-- //////////////////////////////////////////// -->
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-4">
         <img class="cat" src="<?php bloginfo('template_url'); ?>/images/kids1.jpg">
       </div>
      <?php
    $args = array(
      'post_type' => 'products',
      'orderby'   =>'id',
      'order'   =>'DESC',
      'posts_per_page'=>3,
      'tax_query' =>
          array(
          'terms' => 'kides_clothes',
          ),
     );
        $query = new WP_Query( $args );
         
         if($query->have_posts()):
          while ($query->have_posts()):
            $query->the_post();
          ?>
             <div class="col-md-2">
              <div class="thumbnail">
              <?php  the_post_thumbnail('thumbnail'); ?>
                <div class="caption">
                  <h3><?php the_title() ?></h3>
                  <a href="<?php the_permalink()?>">  <button class="btn btn-success btn-block">Buy Now</button></a>
                
                </div>
              </div>
            </div>
    <?php
  endwhile;
 endif;
?> 
</div>
  </div>
 <!-- end container -->
<?php get_footer(); ?>