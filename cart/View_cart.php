<!DOCTYPE html>
<htm>
    <head>
        <title>View Cart page</title>
            <link rel="stylesheet" href="view_cart.css">
    </head>
    <body>

        <h2 >Shopping Cart</h2>
        <table>
            <tr class="thead">
                <th class="thead">
                    <td>Product Name</td>
                    <td>Unit Cost</td>
                    <td>Quantity</td>
                    <td>Total Price</td>
                    <td> Update Product Details</td>
                    <td> Remove Item</td>
                    <td> Buy Item</td>
                </th>
            </tr>
<?php 
    include "config.php";
    
    $sql = "select * from cart_product_list";
   
    $result = $con->query($sql);
    
        
    if ($result->num_rows > 0) {
        // output data of each row
            $count = 0;
    while($row = $result->fetch_assoc()) {
        echo "
            <tr class='tbody'>
                <th>
                    <td>" .  $row['product_name'] . "</td>
                    <td>" . $row['product_unit_cost'] . "</td>
                    <td>" . $row['product_quantity'] . "</td>
                    <td>" . $row['product_total_price'] . "</td>
                    <td>
                        <form method='post' action='update.php'> 
                            <input type='hidden' name='list_item_id' value='". $row['list_item_id'] ."'>
                            <input type='hidden' name='product_unit_cost' value='". $row['product_unit_cost'] ."'>
                            <input type='text' name='updated_quantity' value=''>
                            <input type='submit' class='button-1' role='button' value='Update Quantity'> 
                        </form>
                    </td> 
                    <td>
                        <form method='get' action='delete.php'>
                            <input type='hidden' name='list_item_id' value='". $row['list_item_id'] ."'>
                           <input type='submit' class='button-1' role='button' value='Remove Item'>  
                        </form>
                    </td>
                    <td>
                        <form method='get' action='../yohan/payment_and_shipping.php'>
                            <input type='hidden' name='listing_id' value='". $row['product_id'] ."'>
                            <input type='hidden' name='product_total_price' value='". $row['product_total_price'] ."'>
                            <input type='hidden' name='discount' value='". $row['discount'] ."'>
                           <input type='submit' class='button-1' role='button' value='Buy Item'>  
                        </form>
                    </td>
                </th>
            </tr>
        ";
    }
}
?>

            </tr>
        </Table>
        <br>
        
    </body>
</htm>