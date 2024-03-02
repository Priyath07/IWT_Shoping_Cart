<!DOCTYPE html>
<html>
<head>
<title>List Your Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="CSS/LP.css">
<link rel = "stylesheet" type ="text/css" href="CSS\main.css">
<link rel = "stylesheet" type ="text/css" href="CSS\index.css">
 <link rel = "icon" href = "images/logo.png">
</head>
<body>
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

<p class = "bolded" style="margin-bottom: 3px; font-family: 'Poppins';font-size: 22px;";>List Your Product</p>
<div class="row">
	<div class="column">
    		<form action="listing.php" method="post" enctype="multipart/form-data">
    		<p class ="bolded" style="margin-bottom: 3px; font-family: 'Poppins';font-size: 22px;">Product Details</p>
		<p class="bolded" >Select Image Files to Upload:<p>
    		<input type="file" name="files[]" multiple >
    		<br>
    		<input type="submit" name="submit" value="Upload">
    		<br>
		<label class = "bolded" for="title">Title</label> 
    		<br>
    		<input type = "text" name="title" required>
    		<br>
		<label class = "bolded" for="desc">Product Description</label> 
    		<br>
    		<input type = "text" name="desc" required>
    		<br>
		<label class = "bolded" for="category">Product Category</label> 
    		<br>
    		<input type = "text" name="category" required>
    		<br>
		<label class = "bolded" for="addicategory">Additional Category ($0.35)</label> 
    		<br>
    		<input type = "text" name="addicategory" >
    		<br>
    			</div>
	<div class="column">
		<p class="bolded" style="margin-bottom: 3px; font-family: 'Poppins';font-size: 22px;">Product Specifics</p>
		<p class="bolded">Required</p>
		
		<label class = "bolded" for="type">Type</label>
		<div class="custom-select" style="width:200px;">    
			<select id="prodtype" name="prodtype" required>
   			<option value="toy">Toy</option>
    			<option value="desktop">Desktop</option>
    			<option value="soap">Soap</option>
    			<option value="food">Food</option>
    			</select>
		</div> 
		<p class="bolded" style="margin-bottom: 7px">Additional</p>
		<label class = "bolded" for="prodmat">Material</label>
		<br>
		<input type = "text" name="prodmat" required>
		<br>
		<label class = "bolded" for="prodbrand">Brand</label>
		<br>
		<input type = "text" name="prodbrand" required>
		<br>
		<label class = "bolded" for="prodyear">Manufacture Year</label>
		<br>
		<input type = "text" name="prodyear" required> 
		<br>
		<label class = "bolded" for="condition">Condition</label>
		<br>
		<input type="radio" id="new" name="cond" required>
		<label class = "bolded" for="new">New - Brand New, Unused and Unopened</label>
		<br><br>
		<input type="radio" id="used" name="cond" required>
		<label class = "bolded" for="used">Used - Previously used</label>
		
	</div>
	<div class="column">
		<p class="bolded" style="margin-bottom: 3px; font-family: 'Poppins';font-size: 22px;">Pricing</p>
		
			<label class="bolded" for="price">Price</label>
			<br>
			<input type ="text" name="price" required> 
			<br>
			<input type = "checkbox" id = "offers" name = "offers">
			<label class="bolded" for="allow">Allow Offers</label>
			<p class="bolded">Discounts</p>
			<label class="bolded" for="price2">Reduced Price per Quantity</label>
			<br>
			<input type ="text" id = "price2" name="price2" size=4; disabled> 
			<label for="per">per</label>
			<input type ="text" id = "quantity" name="quantity" size=4; disabled> 
			<p class="bolded" style="margin-bottom: 3px;">Shipping Options</p>
			<label class = "bolded" for="type">Packaging</label>
		<div class="custom-select" style="width:150px;">    
			<select id="packing" name="packing" required>
   			<option value="none">None</option>
			<option value="wrap">Bubblewrap</option>
    			<option value="box">Box</option>
    			<option value="parcel">Parcel</option>
    			</select>
		</div>
			 <label class = "bolded" for="serv">Service</label>
		<div class="custom-select" style="width:150px;">    
			<select id="shipserv" name="shipserv" required>
   			<option value="dhl">DHL</option>
    			<option value="fedex">FedEx</option>
    			<option value="ups">UPS</option>
    			</select>
		</div>
			<label class = "bolded" for="shipcost">Cost</label>
			<input type ="text" id = "shipcost" name="shipcost">
			<br>
			<input type = "checkbox" id = "local" name = "local">
			<label class="bolded" for="local">Allow Local Pickup</label>
			<br>
			
			<!-- php part -->
			<?php 
				include "config.php";
				
				$sql = "select * from listing_test";
			
				$result = $con->query($sql);
				
					
				if ($result->num_rows > 0) {
					// output data of each row
						$count = 0;
				while($row = $result->fetch_assoc()) {
					echo "
				<form action='create_product_view.php' method='POST'>
					<input id='submit' type='submit' class ='button' value='List Product'>
			
				</form>";
					}
				}
				?>
		</form>
		
	</div>
</div>

<hr class="new1">
         <div class = "footer">
            <img id ="icon" alt = "Sell It logo" src ="images/logo.png" width = "100px" height = "auto">
            <center><a class="nav" id="home" href="index.html" style="font-family: 'Poppins';font-size: 18px;"> Home | </a>
            <a class="nav" id="aboutus"  href="aboutus.php" style="font-family: 'Poppins';font-size: 18px;">About Us |</a>
            <a class="nav" id="contact" href="index.php#contact" style="font-family: 'Poppins';font-size: 18px;"> Contact Us </a></center>
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


document.getElementById('offers').onchange = function() {
    document.getElementById('price2').disabled = !this.checked;
document.getElementById('quantity').disabled = !this.checked;
};

</script>
</body>
</html>