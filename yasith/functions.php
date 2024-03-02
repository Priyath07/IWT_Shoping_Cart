<?php 

/*function to check login and return user data*/
function checkLogin($con)
{
	if(isset($_SESSION['id']))
	{
		$id = $_SESSION['id'];
            $sql = "select * from user where id = '$id' limit 1";
			$result = mysqli_query ($con, $sql);
			if ($result && mysqli_num_rows($result) > 0)
			{
				$user = mysqli_fetch_assoc($result);
				return $user;
				$con->close();
			}
		
	}
	else
	{
		return 0;
	}
	die;
}

/*function to show error messages*/
function msgErr($msg)
{
	echo ("<div style='display:block;color:#D8000C;background:#FFD2D2;padding:0.5%;width:99%;font-family: Garamond, serif;font-size: 15px;'>");
	echo ("&#9888; &nbsp;".$msg."<span style='float: right;'>&#10006;</span></div><br/>");
}

/*function to show success messages*/
function msgSuc($msg)
{
	echo ("<div style='display:block;color:#4F8A10;background:#DFF2BF;padding:0.5%;width:99%;font-family: Garamond, serif;font-size: 15px;'>");
	echo ("&#10004; &nbsp;".$msg."<span style='float: right;'>&#10006;</span></div><br/>");
}


?>