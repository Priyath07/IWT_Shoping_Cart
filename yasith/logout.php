<?php
session_start();

if(isset($_SESSION['userid']))
{
	unset($_SESSION['id']);
	
	header("Location: login.php");
}

die;
?>