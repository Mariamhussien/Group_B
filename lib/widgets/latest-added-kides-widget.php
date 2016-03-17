<?php
class LatestKidessWidget extends WP_Widget {

	function __construct() {
		// Instantiate the parent object
		parent::__construct( false, 'Latest Kides Widget' );
	}

	function widget( $args, $instance ) { ?>
		<div class="panel panel-default">
			<div class="panel-heading">
		  		<div class="panel-title"><a href=""></a></div>
			</div>
		  <div class="panel-body">
		  	<div clas="row">
			    <?php
			    $post = get_page($id);
                
			    	$args = array(
			    				'post_type' => 'Products',
			    				'posts_per_page' => 3,
			    				'order' => 'DESC',
			    				'order_by' => 'ID',
			    				// 'per_page'=>2,

			    			);
			    	$hospital = new WP_Query($args);
			    	if($hospital->have_posts()):
			    		while($hospital->have_posts()):
			    			$hospital->the_post();?>
			    				<div class="col-md-4">
			    					<div class="thumbnail">
								    <a href="<?php the_permalink()?>">  <?php  the_post_thumbnail('thumbnail'); ?></a>
								      <div class="caption">
								        <h3><?php the_title() ?></h3>
								      </div>
								    </div>
			    				</div>
			    			<?php
			    		endwhile;
			    	else:
			    		__('No kide_products', 'products');
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

function register_kides_product_widget() {
	register_widget( 'LatestKidessWidget' );
}

add_action( 'widgets_init', 'register_kides_product_widget' );