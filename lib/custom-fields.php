 <?php
// function description_meta_box () {
//         add_meta_box (
//                         'description_meta',
//                         __('', ''),
//                         'description_meta_fields',
//                         'c95-hospital',
//                         'side',
//                         'core'
//                 );
//     }

//     function description_meta_fields(){
    	
//     }
// add_action ('add_meta_boxes', 'description_meta_box');

add_action( 'add_meta_boxes', 'product_price_box' );
function product_price_box() {
    add_meta_box( 
        'product_price_box',
        __( 'Product Price', 'myplugin_textdomain' ),
        'product_price_box_content',
        'products',
        'side',
        'high'
    );
}

function product_price_box_content( $post ) {
  wp_nonce_field( plugin_basename( __FILE__ ), 'product_price_box_content_nonce' );
  echo '<label for="product_price"></label>';
  echo '<input type="text" id="product_price" name="product_price" placeholder="enter a price" />';
    echo '<input type="submit" value="save" onclick="product_price_box_save()"';
}
//////////////////////////////////////////////////////////
$product_price = $_POST['product_price'];
  update_post_meta( $post_id, 'product_price', $product_price );
add_action( 'save_post', 'product_price_box_save' );
function product_price_box_save( $post_id ) {

  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
  return;

  if ( !wp_verify_nonce( $_POST['product_price_box_content_nonce'], plugin_basename( __FILE__ ) ) )
  return;

  if ( 'post' == $_POST['products'] ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
    return;
  } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
    return;
  }
  
}
////////////////////////////////////////////////////////////