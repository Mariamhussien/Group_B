<!-- 
<div class="container">
	<div class="row">
<?php dynamic_sidebar('Primary'); ?>
</div>
</div>

 -->
 <?php
 get_header();?>
?>
 <div class="contanier" id="Scontent">
 	<div class="row">
 		<div class="col-lg-4">
 			<?php if(have_posts()):
                    while (have_posts()):
                    the_post();
 			?>
 			<div class="thumbnail">
		      <?php  the_post_thumbnail('thumbnail'); ?>
		      <div class="caption">
		        <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
		      </div>
		    </div>
		    <?php
		    endwhile;
		    endif;
		    ?>
 		</div>
 	</div>



<?php get_footer();?>


 </div>