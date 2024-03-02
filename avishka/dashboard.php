<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="CSS/styles.css">
<link rel = "stylesheet" type ="text/css" href="CSS\main.css">
<link rel = "stylesheet" type ="text/css" href="CSS\index.css">
 <link rel = "icon" href = "images/logo.png">
	
	
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
<div style="width:100%; ">
	
	<button class="button button1">Revenue</button>
	<button class="button button2">Visitors</button>
	<button class="button button3">Orders</button>
	<button class="button button4">Refunds</button>
	
		<div class="row" style="background-color:#bbb;width: 24%;
				height: 410px;
				float:right;">
    <h2 style="font-size:52px">Category</h2>
    <p style="color: red"><b>Category 01</b></p>
			<p style="color: red"><b>Category 01</b></p>
			<p style="color: red"><b>Category 02</b></p>
			<p style="color: red"><b>Category 03</b></p>
			<p style="color: red"><b>Category 04</b></p>
			<p style="color: red"><b>Category 05</b></p>
  		</div>
		
		<div class="row" style="background-color:#bbb; width: 22%;
				height: 410px;
				float:right;">
    <h2>Order Number</h2>


			<p style="color: red"><b>0001</b></p>
			<p style="color: red"><b>0002</b></p>
			<p style="color: red"><b>0006</b></p>
			<p style="color: red"><b>0015</b></p>
			<p style="color: red"><b>0051</b></p>
			<p style="color: red"><b>0015</b></p>
			<p style="color: red"><b>0501</b></p>
			<p style="color: red"><b>0051</b></p>
  		</div>
		
		
	</div>
	
	
	
<table id="table1">
  <tr>
    <th id="th1">Revenue Vs Oder</th>
    
  </tr>
  <tr>
    <td>
		
	  <container>
		
		<div>
			
			
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = [50,60,70,80,90,100,110,120,130,140,150];
var yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});
</script>
		</div>
		<div align="right">
		
		
		</div>
		</container>
	  
	  </td>
    
  </tr>
		 
	
	
</table>
<br>
	
<div style="border: 1px solid black;
				width: 100%;
				height: 250px;
				float:right;
			background-color: darkgrey
				">
	<table id="table2" style="background-color: antiquewhite">
  <tr bgcolor="#DC060A" 
	  id="l1">
    <th>Order ID</th>
    <th>Sold</th>
    <th>Returns</th>
	<th>Selling Percentage</th>
  </tr>
  <tr>
    <td>0001</td>
    <td>20+</td>
	<td>23</td>
	  <td>55%</td>
	  
  </tr>
  <tr>
    <td>0002</td>
    <td>45+</td>
	 <td>6</td>
	  <td>40%</td>
  </tr>
	<tr>
    <td>0003</td>
    <td>60+</td>
	 <td>55</td>
	  <td>40%</td>
  </tr>
		  <tr>
    <td>0004</td>
    <td>54+</td>
	 <td>44</td>
	  <td>60%</td>
  </tr>

</table>
	<br>
  <?php 
    include "config.php";
    
    $sql = "select * from listing_test";
   
    $result = $con->query($sql);
    
        
    if ($result->num_rows > 0) {
        // output data of each row
            $count = 0;
    while($row = $result->fetch_assoc()) {
        echo "
	<form action='createlisting.php' method='POST'>
      <input type='submit' class='button-1' role='button' value='Create Listing'>  
  </form>
      ";
    }
  }
  ?>
  
</div>
	


	
	    </div>
	    
     <div class="row1">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>11+</h3>
      <p>Partners</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3>55+</h3>
      <p>Customers</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-smile-o"></i></p>
      <h3>100+</h3>
      <p>Happy Clients</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-coffee"></i></p>
      <h3>100+</h3>
      <p>Products</p>
    </div>
  </div>
</div> 
<hr class="new1">
         <div class = "footer">
            <img id ="icon" alt = "Sell It logo" src ="images/logo.png" width = "100px" height = "auto">
            <center><a class="nav" id="home" href="index.html" style="font-family: 'Poppins';font-size: 18px;"> Home | </a>
            <a class="nav" id="aboutus"  href="aboutus.php" style="font-family: 'Poppins';font-size: 18px;">About Us |</a>
            <a class="nav" id="contact" href="Help and contact.html" style="font-family: 'Poppins';font-size: 18px;"> Contact Us </a></center>
        </div>
</body>
</html>


