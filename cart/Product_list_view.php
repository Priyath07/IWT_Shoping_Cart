<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href="Product_list_view.css">
</head>

<body>

<h2 style="text-align:center">Product list</h2>

<?php 
    include "config.php";
    
    $sql = "select * from listing_test";
   
    $result = $con->query($sql);
    
        
    if ($result->num_rows > 0) {
        // output data of each row
            $count = 0;
    while($row = $result->fetch_assoc()) {
        echo "
        <div class='card'>
          <img src='images/w1.png' alt='apple watch' >
          <h1>". $row["title"] ."</h1>
          <p class='". $row["price"] ."'>$2</p>
          <p>". $row["descr"] ."</p>
          <p>
            <form method='get' action='view_product.php'>
              <input type='hidden' name='listing_id' value='". $row['listing_id'] ."'>
              <input type='submit' id='addToCart' value='View More Details'>
            </form>
          </p>
          <p>
            <form method='post' action='add_to_cart.php'>
              <input type='hidden' name='listing_id' value='". $row['listing_id'] ."'>
              <input type='hidden' name='title' value='". $row['title'] ."'>
              <input type='hidden' name='price' value='". $row['price'] ."'>
              <input type='submit' id='addToCart' value='Add to Cart'>
            </form>
          </p>
      </div>
        ";
    }
}

?>



</body>
</html>
