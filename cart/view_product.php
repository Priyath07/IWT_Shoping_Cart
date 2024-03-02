<!DOCTYPE html>

<?php 
    include "config.php";
    
    $product_id = $_GET["listing_id"];
    $sql = "select * from listing_test where listing_id = '$product_id'";
   
    $result = $con->query($sql);
    
    $product_name = "";
    $product_description = "";
    $product_price = "";  
        
    if ($result->num_rows > 0) {
        // output data of each row
            $count = 0;
    while($row = $result->fetch_assoc()) {
        $product_name = $row["title"];
        $product_description = $row["descr"];
        $product_price = $row["price"];
    }
}
        
   
    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Image Change</title>
    <link rel = "stylesheet" href = "style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class = "main-wrapper">
        <div class = "container">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                        <img src = "images/w1.png" alt = "watch">
                    </div>
                    <div class = "hover-container">
                        <div><img src = "images/w1.png"></div>
                        <div><img src = "images/w2.png"></div>
                        <div><img src = "images/w3.png"></div>
                        <div><img src = "images/w4.png"></div>
                        <div><img src = "images/w5.png"></div>
                    </div>
                </div>
                <div class = "product-div-right">
                    <span class = "product-name"><?php echo $product_name ?></span>
                    <span class = "product-price">$24<?php echo $product_price?></span>
                    <div class = "product-rating">
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star-half-alt"></i></span>
                        <span>(350 ratings)</span>
                    </div>
                    <p class = "product-description"><?php echo $product_description ?></p>
                    <div class = "btn-groups">
                        <form method='post' action='add_to_cart.php'>
                            <input type='hidden' name='listing_id' value= <?php echo $product_id ?> >
                            <input type='hidden' name='title' value= <?php echo $product_name ?> >
                            <input type='hidden' name='price' value= <?php echo $product_price ?> >
                            <button  class = "buy-now-btn" type='submit' id='addToCart'><i class = "fas fa-wallet"></i>Add to Cart</button>
                        </form>
                        <button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <section class="product-all-info">
        <ul class="product-info-menu">
            <li class="p-info-list">Description</li>
            <li class="p-info-list">Materials</li>
            <li class="p-info-list">How to use</li>
            <li class="p-info-list">More details</li>
        </ul>
    </section> -->

    <script src = "script.js"></script>




</body>
</html>