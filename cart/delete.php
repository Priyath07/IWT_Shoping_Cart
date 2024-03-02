<?php
include "config.php";

$li_id = $_GET["list_item_id"];

$sql = "delete from cart_product_list where list_item_id = " . $li_id ;
$con->query($sql);

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

header("Location:View_cart.php");

?>