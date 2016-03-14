<?php
include "head.php";
get_header();
get_footer();
?>


<div class="container">
    <div class="row">
    	<div class="col-lg-12">
              <?php  $cat_row = mysqli_fetch_assoc($categories_result); ?>
              <h1 class="page-header"> <?php echo "<h1>" . $cat_row["name"] . "</h1>";?> </h1>
              </div> <hr>

              <?php
                // $product_result = mysqli_query( $conn, "SELECT * FROM `products` WHERE category_id = $cat_row[id] ORDER BY id DESC LIMIT 0, 10" );
                // while ($row = mysqli_fetch_assoc($product_result)) :       
              ?>
              <div class="col-md-4">
                    <div class="thumbnail">
                        <img class="img-responsive img-portfolio img-hover" src="<?php echo $row["image"]; ?>" alt="">
                            <div class="caption">
                                <h3><?php echo $row["Product_Name"]; ?></h3>
                                <p><?php echo $row["price"]; ?>EGP</p>
                                <p><a href="#" class="btn btn-success btn-block" role="button">Buy Now</a> </p>
                              </div>
                    </div>
              </div> 
 <?php 
    endwhile;

 ?>