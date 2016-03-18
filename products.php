<?php 
  
    if(isset($_GET['action']) && $_GET['action']=="add"){ 
          
        $id=intval($_GET['id']); 
          
        if(isset($_SESSION['cart'][$id])){ 
              
            $_SESSION['cart'][$id]['stock_quantity']++; 
              
        }else{ 
              
            $sql_s="SELECT * FROM products 
                WHERE id={$id}"; 
            $query_s=mysql_query($sql_s); 
            if(mysql_num_rows($query_s)!=0){ 
                $row_s=mysql_fetch_array($query_s); 
                  
                $_SESSION['cart'][$row_s['id']]=array( 
                        "stock_quantity" => 1, 
                        "price" => $row_s['price'] 
                    ); 
                  
                  
            }else{ 
                  
                $message="This product id it's invalid!"; 
                  
            } 
              
        } 
          
    } 
  
?> 
    <h1>Product List</h1> 
    <?php 
        if(isset($message)){ 
            echo "<h2>$message</h2>"; 
        } 
    ?> 
    <div class="container">
        <div class="row">
            <div class="col-md-8">
    <table> 
        <tr> 
            <th>Name</th> 
            <th>stock_quantity</th> 
            <th>Price</th> 
            <th>Action</th>
            <th class="size">Image</th> 
        </tr> 
          
        <?php 
          
            $sql="SELECT * FROM products ORDER BY name ASC"; 
            $query=mysql_query($sql); 
              
            while ($row=mysql_fetch_array($query)) { 
                  
        ?> 
            <tr> 
                <td><?php echo $row['name'] ?></td> 
                <td><?php echo $row['stock_quantity'] ?></td> 
                <td><?php echo $row['price'] ?>$</td> 
                <td><a href="bascket.php?page=products&action=add&id=<?php echo $row['id'] ?>">Add to cart</a></td> 
                <td><img class="size" src="<?php echo $row['image']?>"></td>
            </tr> 
        <?php 
                  
            } 
          
        ?> 
          
    </table>
</div>