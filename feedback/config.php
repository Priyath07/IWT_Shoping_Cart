<?php
	$servername = "localhost"; 
	$username = "root"; 
	$password = ""; 
	$dbname = "online_shopping_cart";

	// Create connection 
	$con = new mysqli($servername, $username, $password, $dbname); 

	// Check connection 
	if ($con->connect_error) { 
		die("Connection failed: " . $con->connect_error); 
	}
	 #echo "<script> alert('Connected successfully')</script>"; 
?>