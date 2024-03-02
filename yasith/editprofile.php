<?php
session_start();
require('config.php'); 
include('functions.php');

$userData = checkLogin($con);

/* edit data */
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['update']))
{
  $userid = $_SESSION['userid'];
  $username = $_POST["username-input"]; 
  $email = $_POST["email-input"]; 
  $oldpassword = $_POST["old-password-input"];
  $newpassword = $_POST["new-password-input"];

/* edit username */
  if($username != $userData['username'])
  {
    $sql01 = "UPDATE user SET username = '$username' WHERE user_id = '$userid'";
    mysqli_query ($con, $sql01);
    msgSuc("Update Succsesful.");
  }

/* edit email */
  if($email != $userData['email'])
  {
    $sql02 = "UPDATE user SET email = '$email' WHERE user_id = '$userid'";
    mysqli_query ($con, $sql02);
    msgSuc("Update Succsesful.");
  }

/* edit password */
  if(!empty($oldpassword) && !empty($newpassword) && $oldpassword === $userData['password'] && $newpassword != $userData['password'])
  {
    $sql03 = "UPDATE user SET password = '$newpassword' WHERE user_id = '$userid'";
    mysqli_query ($con, $sql03);
    msgSuc("Update Succsesful.");
  }
  elseif (!empty($oldpassword) && $oldpassword != $userData['password'])
  {
    msgErr('Update unsuccsesful. Incorrect Password');
  }

  $con->close();
  header("refresh:1;url=editProfile.php");
  die;  
}
/* Delete account */
elseif ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['delete']))
{
  $username = $_POST['username-input-4dlt']; 
  $password = $_POST['password-input-4dlt'];

  if ($username === $userData['username'] && $password === $userData['password'])
  {
    $sql05 = "DELETE FROM user WHERE username = '$username'";
    mysqli_query ($con, $sql05);
    $con->close();
    header("Location: logout.php");
    die;
  }
  else
  {
    msgErr('Delete unsuccsesful. Incorrect ID or Password');
    header("refresh:1;url=editProfile.php");
    die;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <link rel="stylesheet" type="text/css" href="styles/edit.css">
  <script type="text/javascript"  src="js/script.js"></script>

  <title>Edit Profile - Sell It</title>

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
            <!--<div class = "search">
                <input type = "text" placeholder="Search">
            </div>-->
            <div class = "icon2">
                <a class = cart href =""><image id = "cart" alt = "shopping cart logo" src = "images/cart.png" width = "50px" height = "auto" /></a>
            </div>
        </div>
        <hr>
        <!--Header End-->

  

<!--content start-->
  <div class="content">

    <div class="editProf-container">

      <div class="back2">
        <a href="user.php"> <<< &nbsp;Back </a>
      </div>

<!--edit profile start-->
      <div class="editProf" style="margin-top:0px;margin-bottom: 10px;">
        <form name="editProfB" action="" method="post">

          <label id="title" style="padding-left: 160px;">Edit Profile</label>
          <br/> <br/> <br/>

          <label id="Username-Label">Username<br></label>
          <input type="text" id="Username-input" name="username-input" value="<?php echo $userData['username']; ?>">

          <label id="email-Label"><br>Email<br></label>
          <input type="email" id="email-input" name="email-input" value="<?php echo $userData['email']; ?>">

          <label id="password-Label"><br>Old Password<br></label>
          <input type="password" id="password-input" name="old-password-input" placeholder="Enter your old password.." >

          <label id="password-Label"><br>New Password<br></label>
          <input type="password" id="password-input" name="new-password-input" placeholder="Enter your new password..">

          <input id="submit" name="update" type="submit" value="Submit Changes">

        </form>
      </div>
<!--edit profile end-->

      <br/><br/>

<!--delete profile start-->
      <a id="dltProf" onclick="showNDhide('dltProfB')" href="#dltProf">Delete Account</a>

      <div id="dltProfB" class="dltProf" style="display: none;">
        <form  name="dltProfB" method="post">
        <br/>
        <label id="username-Label">Username<br></label>
        <input type="text" id="Username-input" name="username-input-4dlt" placeholder='Username..'>
    
        <label id='password-Label'><br>Password<br></label>
        <input type='password' id='password-input' name='password-input-4dlt' placeholder='Password..'>

        <input id="submit" name="delete" type="submit" value="Submit">
        </form>
      </div>
<!-- delete profile end-->

    </div>

  </div>
<!--content end-->

  <br/>

<!--Footer Start-->
<hr>
         <div class = "footer">
            <img id ="icon" alt = "Sell It logo" src ="images/logo.png" width = "100px" height = "auto">
            <a class="nav" id="home" href="index.html"> Home| </a>
            <a class="nav" id="aboutus"  href="aboutus.php">About Us|</a>
            <a class="nav" id="contact" href="index.php#contact"> Contact Us </a>
        </div>
         <!--Footer end-->

</body>            
</html>



