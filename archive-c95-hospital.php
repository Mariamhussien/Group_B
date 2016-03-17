<?php get_header() ;?>
<div class="row">
<?php
	while(have_posts()):
		the_post();
		?>
		<div class="col-md-3">
			<div class="thumbnail">
		      <?php the_post_thumbnail('thumbnail', array( 'class' => 'img-circle' )); ?>
		      <div class="caption">
		        <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
		      </div>
		    </div>
		</div>
	<?php
	endwhile;
?>
</div>
<?php get_footer() ;?>