<?php
session_start();
require('config.php'); 
include 'functions.php';

$userData = checkLogin($con);


?>

<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" type ="text/css" href="styles/main.css">
        <link rel = "stylesheet" type ="text/css" href="styles/user.css">
        
        

        <link rel = "icon" href = "images/logo.png">
        <title>Sell It</title>
       
    </head>
    <body>
         <!--Header Start-->
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
        <hr>
        <!--Header End-->

        <!--Content start-->

        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>User Account</li>
        </ul>
        <!--display user name if user is logged in as a buyer or redirect-->
    <?php
      $logOut = "<a href='logout.php' id='logout'>Log Out</a>";

      if(isset($_SESSION['account']) && $_SESSION['account'] == "buyer")
      {
        echo($logOut);
        echo("<a id='username' href='user.php'>". $userData['username']. "</a>");
      }
      else
      {
        header("Location: index.html");
      }
    ?>

  

        <!--user details start-->
        <div class="user-details">
        <span> Username &nbsp;: <?php echo $userData['username']; ?> </span>
        <a id="editProf" href="editprofile.php"> Edit Profile </a>
        </div>
        <!--user details end-->


        <!--Footer Start-->
        <hr>
         <div class = "footer">
            <img id ="icon" alt = "Sell It logo" src ="images/logo.png" width = "150px" height = "auto">
            <a class="nav" id="home" href="index.html"> Home| </a>
            <a class="nav" id="aboutus"  href="aboutus.php">About Us|</a>
            <a class="nav" id="contact" href="index.php#contact"> Contact Us </a>
        </div>
         <!--Footer end-->



    </body>
