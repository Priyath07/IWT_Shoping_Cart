<?php

include "config.php";

$list_item_id = $_POST["list_item_id"];
$product_unit_cost = $_POST["product_unit_cost"];
$updated_quantity = $_POST["updated_quantity"];

$product_total_price = $product_unit_cost * $updated_quantity;

$sql = "update cart_product_list set product_quantity= $updated_quantity, product_total_price= $product_total_price where list_item_id= $list_item_id";

echo $sql;

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

header("Location:View_cart.php");

?>