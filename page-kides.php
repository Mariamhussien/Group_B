<?php get_header();?>
<div class="container">

		  	<div clas="row">
			    <?php
			    	$args = array(

		    				'post_type'     => 'products',
                             'category_name'=>'kides',
		    				// 'posts_per_page'=> 3,
		    				'order'         => 'id',
		    				'orederby'      =>'ASC',
			    				 
			    			);
			    	$hospital = new WP_Query($args);

			    	if($hospital->have_posts()):
		    		while($hospital->have_posts()):
		    			$hospital->the_post();?>
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
			    	else:
			    		__('No products', 'products');
			    	endif;
			        ?>

</div>
</div>
<?php get_footer();?>