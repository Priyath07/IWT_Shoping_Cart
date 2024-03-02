<?php

include 'config.php';

#if(isset($_POST['submit'])){ 

   
    $listing_id = $_POST["listing_id"];
    $product_name = $_POST["title"];
    $price = $_POST["price"];

    $add_to_cart_sql =  "INSERT INTO cart_product_list(product_id, product_name, product_unit_cost, product_quantity, product_total_price, discount) 
    VALUES('$listing_id', '$product_name', '$price', 1, '$price', 0)";
  
    if ($con->query($add_to_cart_sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $add_to_cart_sql . "<br>" . $con->error;
    }
  #}
  
    $con->close();

    header("Location:view_Cart.php");

?>