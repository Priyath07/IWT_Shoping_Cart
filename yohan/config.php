<?php
// connect with database

$dbhost = "localhost";
$dbuser = "root"; 
$dbpass = "";
$dbname = "online_shopping_cart";

//The connection object
$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if($con->connect_error)
{
	die("Connection failed: " . $con->connect_error);
}

?>