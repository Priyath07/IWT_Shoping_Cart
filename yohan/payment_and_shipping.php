<!DOCTYPE html>
<html>
<head>
<title>Payment and Shipping</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="CSS/SnP.css">
<link rel = "stylesheet" type ="text/css" href="CSS\main.css">
 <link rel = "stylesheet" type ="text/css" href="CSS\index.css">
 <link rel = "icon" href = "images/logo.png">
</head>
<body>

<?php
  include 'config.php';

  $listing_id = $_GET["listing_id"];
  $product_total_price = $_GET["product_total_price"];
  $discount = $_GET["discount"];

  $net_total = $product_total_price - $discount;
?>

<div class = "header">
            <div class ="icon1">
               <a class ="account" href ="Register.html"><image id = "account" alt = "Account icon" src ="images/account.jpg" width = "50px" height = "auto"/></a> 
            </div>
            <div class = "logo">
                <image id ="logo" alt = "sell it logo" src ="images/logo.png" width = "100px" height ="auto"/>
            </div>
            <div class = "search">
                <input type = "text" placeholder="Search">
            </div>
            <div class = "icon2">
                <a class = cart href =""><image id = "cart" alt = "shopping cart logo" src = "images/cart.png" width = "50px" height = "auto" /></a>
            </div>
        </div>
        <hr class="new1">
<ul class="breadcrumb">
  <li><a class="nav" id="home" href="index.html">Home</a></li>
  <li><a href="https://www.w3schools.com/css/css_font.asp">Shopping Cart</a></li>
  <li>Shipping and Payment</li>
</ul>
<div class="row">
  <div class="column">
    <p class = "bolded" style="margin-bottom: 3px; font-family: 'Poppins';font-size: 22px;";>Shipping Details</p>
    <form action="shipping.php" method="post">
    	<label class = "bolded" for="fname">Full Name</label> 
    	<br>
    	<input type = "text" id="fname" required>
    	<br>
    	<label class = "bolded" for="sadd">Shipping Address</label> 
    	<br>
    	<input type = "text" name="sadd" required>
   	 <br>
    	<label class = "bolded" for="sadd2">Shipping Address 2 (Optional)</label> 
    	<br>
    	<input type = "text" name="sadd2">
    	<br>
    	<label class = "bolded" for="city">City</label> 
    	<br>
    	<input type = "text" name="city" size="10">
	<br>
	<label class = "bolded" for="postal">Postal Code</label>
	<br>
    	<input type = "text" name="postal" size="10" required>
    	<br>
   	<label class = "bolded" for="phnumber">Phone Number</label> 
    	<br>
    	<input type = "text" name="phnumber" required>
     	<br>
   	<label class = "bolded" for="instructions">Specific Instructions (Optional)</label> 
    	<br>
    	<input type = "text" name="instructions">
    	<br>
    	<label class = "bolded" for="shmethod">Shipping Method</label>
	<div class="custom-select" style="width:200px;">     
		<select id="shipmeth" name="shipmeth" required>
    		<option value="standard">Standard</option>
    		<option value="express">Express</option>
  		</select> 
	</div>
	
  </div>
  <div class="column">
    	<p class = "bolded" style="margin-bottom: 3px; font-family: 'Poppins';font-size: 22px;";>Payment Details</p>
    	
    		<label class = "bolded" for="noc">Name on Card</label> 
    		<br>
    		<input type = "text" name="noc" required>
    		<br>
		<label class = "bolded" for="ctype">Card Type</label>
		<div class="custom-select" style="width:200px;">    
			<select id="ctype" name="ctype" required>
    			<option value="paypal">PayPal</option>
   			<option value="amex">American Express</option>
			<option value="visa">Visa</option>
  			</select> 
		</div>
		<br>
		<label class = "bolded" for="cno">Card Number</label> 
    		<br>
    		<input type = "text" name="cno" required>
    		<br>
		<label class = "bolded" for="cvv">CVV</label> 
    		<br>
    		<input type = "text" name="cvv" required>
   		<br>
		<p class = "bolded" style="margin-bottom: 3px; font-family: 'Poppins';font-size: 16px;";>Expiry :</p>
		<label class = "bolded" for="month">Month</label>
		<div class="custom-select" style="width:200px;">    
			<select id="month" name="month" required>
   			<option value="Januray">Januray</option>
    			<option value="February">February</option>
    			<option value="March">March</option>
    			<option value="April">April</option>
    			<option value="May">May</option>
    			<option value="June">June</option>
    			<option value="July">July</option>
    			<option value="August">August</option>
    			<option value="Septembe">September</option>
    			<option value="October">October</option>
    			<option value="November">November</option>
    			<option value="December">December</option>
    			</select>
		</div> 
		<br>
    		<label class = "bolded" for="year">Year</label> 
		<br>
    		<input type = "text" name="year" required>
     		<p class = "bolded" style="margin: -8px; font-family: 'Poppins';font-size: 22px;";>Coupons/Discounts</p>
      	<br>
		<label class = "bolded" for="coupons">Coupon/Discount code</label> 
   		<br>
   		<input type = "text" name="coupons" >
	
  </div>
  <div class="column">
    <center><p class = "bolded" style="margin-bottom: 3px; font-family: 'Poppins';font-size: 22px;";>Checkout Details</p></center>
    <hr class="new1">
    <p class = "bolded" style="margin-bottom: 3px; font-family: 'Poppins';font-size: 16px;";>Subtotal: <?php echo $product_total_price ?> </p>
    <p class = "bolded" style="margin-bottom: 3px; font-family: 'Poppins';font-size: 16px;";>Shipping: </p>
    <p class = "bolded" style="margin-bottom: 3px; font-family: 'Poppins';font-size: 16px;";>Discounts: <?php echo $discount ?> </p> 
    <hr class="new1">
    <p class = "bolded" style="margin-bottom: 3px; font-family: 'Poppins';font-size: 16px;";>Total: <?php echo $net_total ?> </p> 
    <a href="../cart/view_cart.php" class="button1" >Edit Cart</a>
    <input id="submit" type="submit" class ="button2" value="Confirm Checkout">
    </form>
</div>
</div>
<hr class="new1">
<div class = "footer">
<img id ="icon" alt = "Sell It logo" src ="images/logo.png" width = "100px" height = "auto">
<center><a class="nav" id="home" href="index.html"> Home| </a>
<a class="nav" id="aboutus"  href="aboutus.php">About Us|</a>
<a class="nav" id="contact" href="index.php#contact"> Contact Us </a></center>
</div>







<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>

  

</body>

</html>