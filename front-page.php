<?php get_header(); ?>
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php bloginfo('template_url');?>/images/index_slide01.jpg" alt="WE ARE FASHION REVOLUTION!!">
    </div>

    <div class="item">
      <img src="<?php bloginfo('template_url');?>/images/index_slide02.jpg" alt="FASHION WEEK!">
    </div>

    <div class="item">
      <img src="<?php bloginfo('template_url');?>/images/index_slide03.jpg" alt="Get free shipping on a total order value of 600 EGP on all fashion items">
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div><hr>
				
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
    
    

    <div class="jumbotron ">
     <div class=" col-lg-4 img"> 
    <img src="<?php bloginfo('template_url'); ?>/images/men.jpg">
    </div>
     <?php

          $args = array(
            'post_type' => 'products',
            
            'order'   =>'DESC',
            'posts_per_page'=>4,
            'tax_query' =>
                array(
                'taxonomy' => 'man_clothes',
                ),
                'relation' => 'AND',
                array(
                'taxonomy' => 'man_shoes',
                // 'field'    => 'slug',
                ),
                'orderby'   =>'id',
           );
          $query = new WP_Query( $args );
           
           if($query->have_posts()):
            while ($query->have_posts()):
              $query->the_post();
            ?>
              <div class="col-md-4">
                <div class="thumbnail">
                <a href="<?php the_permalink()?>">  <?php  the_post_thumbnail('thumbnail'); ?></a>
                  <div class="caption">
                    <h3><?php the_title() ?></h3>
                    <p><a href="#" class="btn btn-success btn-block" role="button">Buy Now</a> </p>

                  </div>
                </div><br>
              </div>
    <?php
  endwhile;
 endif;

?> 
   
    </div>      </div><br><hr><br>

    <!-- // -->
    <div class="jumbotron ">
           <div class=" col-lg-4 img"> 

      <img src="<?php bloginfo('template_url'); ?>/images/kids.jpg">
    </div>
      <?php
    $args = array(
      'post_type' => 'products',
      'orderby'   =>'id',
      'order'   =>'DESC',
      'posts_per_page'=>4,
      'tax_query' =>
          array(
          'taxonomy' => 'kides_clothes',
          ),
     );
        $query = new WP_Query( $args );
         
         if($query->have_posts()):
          while ($query->have_posts()):
            $query->the_post();
          ?>
             <div class="col-md-4">
              <div class="thumbnail">
              <a href="<?php the_permalink()?>">  <?php  the_post_thumbnail('thumbnail'); ?></a>
                <div class="caption">
                  <h3><?php the_title() ?></h3>
                    <p><a href="#" class="btn btn-success btn-block" role="button">Buy Now</a> </p>
                </div>
              </div>
            </div>
    <?php
  endwhile;
 endif;
?> 
  </div>    </div><br><hr><br>

 <!-- end container -->
<?php get_footer(); ?>