<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Search Product</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" type ="text/css" href="styles/styles.css">
	<link rel = "stylesheet" type ="text/css" href="styles/main.css">
	<link rel = "stylesheet" type ="text/css" href="styles/index.css">
 	<link rel = "icon" href = "images/logo.png">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	
<head>
<body>


<div class = "header">
            <div class ="icon1">
               <a class ="account" href ="Register.html"><image id = "account" alt = "Account icon" src ="images/account.jpg" width = "50px" height = "auto"/></a> 
            </div>
		<a href="index.html" style="font-family: 'Poppins';font-size: 16px;">Home</a>
		<a href="#" style="font-family: 'Poppins';font-size: 16px;">Help and Contact</a>
            <div class = "logo">
                <image id ="logo" alt = "sell it logo" src ="images/logo.png" width = "100px" height ="auto"/>
            </div>
            <div class = "search">
				<form action="../cart/view_product.php" method="post">
                	<input type = "text" name="search_name" placeholder="Search">
					<!-- insert button to proceed with search -->
				</form>
            </div>
            <div class = "icon2">
                <a class = cart href =""><image id = "cart" alt = "shopping cart logo" src = "images/cart.png" width = "50px" height = "auto" /></a>
            </div>
        </div>
        <hr>	
<div>
		

		<nav>
			<h2>Categories</h2>

				<div id="droplist">
					<details>
						<summary>Accessories</summary>
						<a href="#" style="text-decoration:none">Handbag</a> 
						<a href="#" style="text-decoration:none">Hair-clip</a>

					</details>


					<details>
						<summary>Clothing</summary>
						<a href="#" style="text-decoration:none">Shirt</a>
		
					</details>


					<details>
						<summary>Food & Drinks</summary>
						<a href="#" style="text-decoration:none">Cheese</a>
						<a href="#" style="text-decoration:none">Chocolate</a>
						<a href="#" style="text-decoration:none">Biscuits</a>
					</details>
					
					
					<details>
						<summary>Electronics</summary>
						<a href="#" style="text-decoration:none">iPhone 13</a>
						<a href="#" style="text-decoration:none">Headphones</a>
						<a href="#" style="text-decoration:none">Batteries</a>
					</details>
		
				</div>

		</nav>



		<main>
			<div class="searchbar">
				<input type="text" id="myInput" onkeyup="myFilter()" placeholder="Search products.." title="Type item ">
				
			</div>

			<!-- links for items here: add urls where # is-->

			<ul id="myUnL" >
				<li><a href="#" style="text-decoration:none">Battery</a></li>
				<li><a href="#" style="text-decoration:none">Biscuits</a></li>
				<li><a href="#" style="text-decoration:none">Cereal</a></li>
				<li><a href="#" style="text-decoration:none">Cheese</a></li>
				<li><a href="#" style="text-decoration:none">Chocolate</a></li>
				<li><a href="#" style="text-decoration:none">Hairclip</a></li>
				<li><a href="#" style="text-decoration:none">Handbag</a></li>
				<li><a href="#" style="text-decoration:none">Headphones</a></li>

			</ul>
			
			<!--JS Product filtering function in search bar-->
			<script>

				function myFilter() {
 			  		var input, li, a, ul, i, filter, txtValue;
					input = document.getElementById("myInput");
					filter = input.value.toUpperCase();
					ul = document.getElementById("myUnL");
					li = ul.getElementsByTagName("li");	

					for (i = 0; i < li.length; i++) {
						a = li[i].getElementsByTagName("a")[0];
							txtValue = a.textContent || a.innerText;

							if (txtValue.toUpperCase().indexOf(filter) > -1) {
								li[i].style.display = ""; } else {
									li[i].style.display = "none";}

					}			
				}

			</script>


		</main>

	</div>
	<hr>
         <div class = "footer" style="margin-left:680px;">
            <center><img id ="icon" alt = "Sell It logo" src ="images/logo.png" width = "100px" height = "auto">

            <a class="nav2" id="home" href="index.html" style="font-family: 'Poppins';font-size: 18px;"> Home | </a>
            <a class="nav2" id="aboutus"  href="aboutus.php" style="font-family: 'Poppins';font-size: 18px;">About Us |</a>
            <a class="nav2" id="contact" href="index.php#contact" style="font-family: 'Poppins';font-size: 18px;"> Contact Us </a></center>
        </div>
</body>
</head>