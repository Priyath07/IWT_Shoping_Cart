<?php
session_start();
require('config.php'); 
include('functions.php');


/* login */
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
  $username = $_POST['email-input']; 
  $password = $_POST['password-input'];

  if ($username == "admin")
  {
    $_SESSION['userid'] = "Admin";
    $_SESSION['account'] = "admin";
    header("Location: ../avishka/dashboard.php");
    die;
  }
  else
 {
    $sql = "SELECT * FROM user_test WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query ($con, $sql);

    if ($result && mysqli_num_rows($result) > 0)
    {
      $user_data = mysqli_fetch_assoc($result);
      #undeclared variable or something
      $_SESSION['user_id'] = $user_data['user_id'];
      $_SESSION['account'] = "buyer";
      header("Location: ../vinuki/search_results.php");
      die;
    }
    else
    {
      msgErr("Login unsuccsesful.");
    }  
  }    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" type ="text/css" href="styles/main.css">
        <link rel = "stylesheet" type ="text/css" href="styles/login.css">

        <link rel = "icon" href = "images/logo.png">
        <title>Login - Sell It</title>
    </head>

    <body>
        <!--Header start-->
        <div class = "header">
            <div class = "image">
                <image id = "icon" alt ="Sell It logo" src = "images/logo.png" width = "100px" height = "auto"/>
            </div>
            <div class = "text">
                <a class ="nav" href ="Register.html"><b>Not a Member? SignUp</b></a>
            </div>
         </div>
         <hr>
         <!--Header End-->

         <!--content start-->
  <div class="content"> 

    <!--login start-->
        <div class="login-container">
          <div class="login">
            <form name="login" method="POST">
              <label id="title">Log In</label>
              <br/> <br/> <br/>
              <label id="id-label">Usename<br/></label>
              <input type="text" id="email-input" name="email-input" placeholder="Username.." required>
    
              <label id="password-label"><br/>Password<br/></label>
              <input type="password" id="password-input" name="password-input" placeholder="Password.." required>
    
              
              <br/>
              <input id="submit" type="submit" value="Login">
            </form>
          </div>
        </div>
    <!--login end-->
    
      </div>
    <!--content end-->

    <!--Footer Start-->
    <hr>
    <div class = "footer">
       <img id ="icon" alt = "Sell It logo" src ="images/logo.png" width = "150px" height = "auto">
       <a class="nav" id="home" href="index.html"> Home| </a>
       <a class="nav" id="aboutus"  href="">About Us|</a>
       <a class="nav" id="contact" href=""> Contact Us </a>
   </div>
    <!--Footer end-->

    </body>
</html>