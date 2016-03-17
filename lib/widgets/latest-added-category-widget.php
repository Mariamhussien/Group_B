<?php
class LatestProductssWidget extends WP_Widget {

	function __construct() {
		// Instantiate the parent object
		parent::__construct( false, 'Latest products Widget' );
	}

	function widget( $args, $instance ) { ?>
		<div class="panel panel-default">
			<div class="panel-heading">
		  		<div class="panel-title"><a href="<?php echo get_permalink(153); ?>"><h1>Doctors</h1></a></div>
			</div>
		  <div class="panel-body">
		  	<div clas="row">
			    <?php
			    	$args = array(
			    				'post_type' => 'products',
			    				'posts_per_page' => 3,
			    				'order' => 'ASC',
			    				'order_by' => 'ID'
			    			);
			    	$doctors = new WP_Query($args);
			    	if($doctors->have_posts()):
			    		while($doctors->have_posts()):
			    			$doctors->the_post();?>
			    				<div class="col-md-4">
			    					<div class="thumbnail">
								      <?php  the_post_thumbnail('thumbnail',array( 'class' => 'img-circle' )); ?>
								      <div class="caption">
								        <h3><a href="<?php the_permalink();?>"><?php the_title() ?></a></h3>
								      </div>
								    </div>
			    				</div>
			    			<?php
			    		endwhile;
			    	else:
			    		__('No Products', 'products');
			    	endif;
			    ?>
			</div>
		  </div>
		</div>
	<?php }

	function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}

	function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Latest News', 'hospitals' );
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}
}

function register_products_widget() {
	register_widget( 'LatestProductsWidget' );
}

add_action( 'widgets_init', 'register_products_widget' );