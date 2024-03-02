<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Online Market Place</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">

	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	
<style>
	* {
  		box-sizing: border-box;
	}


	body{ 
		margin: 0px;
		font-family: 'Poppins';
		font-size: 16px;
		
	}


	body> div{
		display: flex;
		flex-flow: row wrap;
		
	}


	body> div> header, main, nav, footer{
		background-color:white;
		margin:5px;
		padding: 20px;
		border-radius:8px;


	}


	body> div> header{
		order:1;
		height:200px;
		flex: 0 1 100%;;

	}



	body> div> nav{
		order:2;
		flex
		flex: 0 1 200px;
		flex-direction: row;
		
	}


	body> div> main{
		order:3;
		flex: 1;
		flex-direction: row;
		
	}


	body> div> footer{
		order:5;
		flex: 0 1 100%;
		
		
	}


	.header{
		background-color: #CED6E0;
		margin:0px;

	}

	.footer{
		background-color: #CED6E0;
		margin:0px;
		

	}

	main .container .text{
		font-size: 30px;
		text-align: center;
		font-weight: bold;
		letter-spacing: 2px;
		padding-bottom: 40px;
		
		

	}

	.container .card{
		background-color:#FEEDE9;
		border:none;
		border-radius: 20px;
		padding:20px;
		width: 100%;
		box-shadow: 0 2px 5px;

	}

	textarea{
		width:100%;
		border-radius:10px;
		background-color: ;
		padding: 20px;
	}

	@media (max-width: 800px) {
  		body> div> nav, main{
			flex-direction: column;
			flex: 100%;
 		}
	}

	.button{
		width:100px;
		background-color:
		border-radius: 5px;
		padding: 6px;
		

	}

	.button:hover{
		width:100px;
		letter-spacing:2px;
		border: 1px solid #9F6160;
		background-color:;
		border-radius: 3px;
		padding: 6px;

	}

	.delete:hover{
		width:100px;
		letter-spacing:2px;
		border: 1px solid #9F6160;
		background-color:#9F6160;
		border-radius: 3px;
		padding: 6px;

	}

</style>


<head>
<body>
	<div>
		<header class="header">HEADER</header>

		<nav>
			<h3>side menu</h3>
			
		</nav>



		<main>
			<div class="container">
				<div class="text">FEEDBACK COMPILATIONS</div>
				<?php

					include "config.php";
    
						$sql = "select * from feedback_list";
					
						$result = $con->query($sql);
								
						if ($result->num_rows > 0) {
							// output data of each row
								$count = 0;
						while($row = $result->fetch_assoc()) {
							echo"

							<div class='card'>
								<h3>".$row['f_name']. "</h3>
								<h3>".$row['l_name']. "</h3>
								<h4>".$row['email']. "</h4>
								<p>".$row['feedback']. "</p>
								<textarea rows='8' cols='80'></textarea>

								<form method='get' action='updatefeedback.php'>
								<input type='hidden' name='feedback_id' value='". $row['feedback_id'] ."'>
								<input type='hidden' name='feedback' value='". $row['feedback'] ."'>
								<input type='submit' class='button' value='Update'>
								</form>

								<form method='get' action='deletefeedback.php'>
								<input type='hidden' name='feedback_id' value='". $row['feedback_id'] ."'>
								<input type='submit' class='button' value='Delete'>
								</form>
							</div>
							<br>
							";
						}
					}
				?>	
				
			</div>
			
		</main>

		
		<footer class="footer">FOOTER</footer>
	<div>
<body>
</head>