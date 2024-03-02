<?php
session_start();
    require 'config.php';

    $fullname = $_POST["name-input"];
    $email = $_POST["email-input"];
    $username = $_POST["Username-input"];
    $dob = $_POST["birth-input"];
    $password = $_POST["password-input"];

    $sql = "INSERT INTO user_test(username,fullname, email,dob, password) VALUES ('$username','$fullname','$email','$dob','$password')" ;

    // Check connection
	if ($con->query($sql)) {
		echo "<script> alert('Registered successfully!')</script>" ;
	}
	else{
		echo "<script> alert('ERROR')</script>" ;
		echo $sql;
	}

    header("Location:login.html");
?>
    
