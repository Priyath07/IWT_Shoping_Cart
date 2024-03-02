<?php
session_start();
    require 'config.php';


$fname = $sadd = $sadd2 = $city = $postal = $phnumber = $instructions = $shipmeth = $noc = $ctype = $cno = $cvv = $month = $year = $coupons = "" ;

    $fname = $_POST["fname"];
    $sadd = $_POST["sadd"];
    $sadd2 = $_POST["sadd2"];
    $city = $_POST["city"];
    $postal = $_POST["postal"];
    $phnumber = $_POST["phnumber"];
    $instructions = $_POST["instructions"];
    $shipmeth = $_POST["shipmeth"];
    $noc = $_POST["noc"];
    $ctype = $_POST["ctype"];
    $cno = $_POST["cno"];
    $cvv = $_POST["cvv"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $coupons = $_POST["coupons"];


if (isset($_POST['fname']))
{
    $fname = $_POST['fname'];
}


    $sql = "INSERT INTO shipandpay VALUES ('$fname','$sadd','$sadd2','$city','$postal','$phnumber','$instructions','$shipmeth','$noc','$ctype','$cno','$cvv','$month','$year','$coupons')" ;

    // Check connection
	if ($con->query($sql)) {
		echo "<script> alert('Successfully checked out cart!')</script>";
	}
	else{
		echo "<script> alert('ERROR')</script>" ;
		echo $sql;
	}
?>