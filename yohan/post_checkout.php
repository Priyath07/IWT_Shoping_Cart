<!DOCTYPE html>
<html>
<head>
<!--//https://github.com/Abhirup-Sarkar/order-summary-->
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <link rel="stylesheet" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="CSS/pcs.css">
<link rel = "stylesheet" type ="text/css" href="CSS\main.css">
 <link rel = "stylesheet" type ="text/css" href="CSS\index.css">
 <link rel = "icon" href = "images/logo.png">
</head>
<body>

<div class = "header">
            <div class ="icon1">
               <a class ="account" href ="Register.html"><image id = "account" alt = "Account icon" src ="images/account.jpg" width = "50px" height = "auto"/></a> 
            </div>
            <div class = "logo">
                <image id ="logo" alt = "sell it logo" src ="images/logo.png" width = "100px" height ="auto"/>
            </div>
            <div class = "search">
                <input type = "text" placeholder="Search">
            </div>
            <div class = "icon2">
                <a class = cart href =""><image id = "cart" alt = "shopping cart logo" src = "images/cart.png" width = "50px" height = "auto" /></a>
            </div>
        </div>
        <hr class="new1">


    
        <center><h2 class="hero-heading" style="margin: -15px 0px;">Order Summary</h2>
        <p class ="text">This is the summary of your order</p></center>

        <?php
        
            include 'config.php';

            $sql = "select * from shipandpay";
   
            $result = $con->query($sql);
            
                
            if ($result->num_rows > 0) {
                // output data of each row
                    $count = 0;
            while($row = $result->fetch_assoc()) {
                echo "
                    <div class='small-container'>
                        <img class ='small-container_img' src = 'images/icon-music.svg'>
                    
                        <p class ='text1'>". $row["noc"] ."</p>
                        <p class ='text2'>Net Total:". $row["noc"] ."</p>
                        
                </div>
                    ";
            }
        }
        
        
        ?>


<hr class="new1" style="margin-top:150px;">
         <div class = "footer" >
            <img id ="icon" alt = "Sell It logo" src ="images/logo.png" width = "100px" height = "auto">
            <center><a class="nav" id="home" href="index.html" style="font-family: 'Poppins';font-size: 18px;"> Home | </a>
            <a class="nav" id="aboutus"  href="aboutus.php" style="font-family: 'Poppins';font-size: 18px;">About Us |</a>
            <a class="nav" id="contact" href="index.php#contact" style="font-family: 'Poppins';font-size: 18px;"> Contact Us </a></center>
        </div>



</body>

</html>