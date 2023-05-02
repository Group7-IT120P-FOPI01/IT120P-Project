<style>
body {
  font-family: Arial, sans serif;
  background-color: white;
  color: black;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #white;
}

button[type="submit"]:hover {
  font-weight:bold;
}

</style>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-pink.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>User Registration</title>

   
  </div>
</div>
</head>

<body style="font-family:Arial;">
<div class="w3-top">
 <div class=" w3-bar w3-left-align" style="background-color:#f2ecd9; height: 100%">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d5" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  
  <a class="navbar-brand w3-left" href="#"><img class="logo" src="logo.png" width="55" height="50" style="margin-top:20%;margin-left:15%; margin-bottom:20%" alt="logo"></a>
  <strong>
  
  <a href="customers.php" class="w3-bar-item w3-button w3-right" title="Search"style="margin-top:1%;margin-left:2%;margin-right:2%; padding-left:30px; padding-right:30px;background-color: white; color:#ef8e8d; border-radius: 5px;">Back</a>

  </strong>
  </div>
  </div>
  
<?php		

	$con = mysqli_connect('localhost','root','','edgedata') or die(mysqli_error());

?>
 
<!-- Influencer List -->
 
<center>

	<h1 style="width: 45%; margin-top:10%;margin-bottom:5%; background-color: white;"> 

		<h2 style="font-family: Copperplate Gothic; font-size: 60;color:#ff8c92;"><strong>Add New User</strong></h2>
		
	</h1>	

</center>

<center>
	<div class="container" style="margin-top:30px">
        
		<div class="col-md-4 col-md-offset-4">
            
			<div class="panel panel-default">
			
				<div class="panel-body">
              
					<form role="form" method="post">
					
						<div class="form-group">
					
							<label for="userID" style="font-family: Calibri; font-size: 130%">User ID</label><br>
							<input type="text" class="form-control" style="border: 0; border-radius:10px; width: 20%; height: 4%; background-color:#fee9ea" name="userID" ><br><br>
						
						</div>
                
						<div class="form-group">
							
							<label for="email" style="font-family: Calibri; font-size: 130%">Email</label><br>
							<input type="text" class="form-control" style="border: 0; border-radius:10px; width: 20%; height: 4%; background-color:#fee9ea" name="email" ><br><br>
						
						</div>
						
						<div class="form-group">
							
							<label for="password" style="font-family: Calibri; font-size: 130%">Password</label><br>
							<input type="password" class="form-control" style="border: 0; border-radius:10px; width: 20%; height: 4%; background-color:#fee9ea" name="password" ><br><br>
						
						</div>
						
						<div class="form-group">
							
							<label for="fname" style="font-family: Calibri; font-size: 130%">First Name</label><br>
							<input type="text" class="form-control" style="border: 0; border-radius:10px; width: 20%; height: 4%; background-color:#fee9ea" name="fname" ><br><br>
						
						</div>
						
						<div class="form-group">
							
							<label for="lname" style="font-family: Calibri; font-size: 130%">Last Name</label><br>
							<input type="text" class="form-control" style="border: 0; border-radius:10px; width: 20%; height: 4%; background-color:#fee9ea" name="lname" ><br><br>
						
						</div>
						
						<div class="form-group">
							
							<label for="address" style="font-family: Calibri; font-size: 130%">Address</label><br>
							<input type="text" class="form-control" style="border: 0; border-radius:10px; width: 20%; height: 4%; background-color:#fee9ea" name="address" ><br><br>
						
						</div>
				
						<button onclick="myFunction()" type="submit" style="border: 0; border-radius:40px; width: 7%; height: 5%; font-family: Calibri; font-size: 160%; background-color:#ff8c92; color: white"class="btn btn-sm btn-primary" name="adduser">Add User</button>
						<label id="error" class="label label-danger pull-right"></label> 
				
					</form>
            
				</div>
			
			</div>
        
		</div>
		
    </div>

</center>

 <script>
        function myFunction()
        {
          var r=confirm("Adding record...");
          if (r==true)
            {
            <?php header('Location: /.php'); ?>
            }
            }
			
        </script>
	
<?php
      
    if(isset($_POST['adduser']))
        { 
			$userID = $_POST['userID']; 
			$email = $_POST['email']; 
			$password = $_POST['password']; 
			$fname = $_POST['fname']; 
			$lname = $_POST['lname']; 
			$address = $_POST['address']; 

            $admin = mysqli_query($con, "INSERT INTO users (user_id, user_email, user_password, user_firstname, user_lastname, user_address) VALUES
			('$userID', '$email', '$password', '$fname', '$lname', '$address')"); 

		}
        
?>
          
<br />
<br />
<br />

<!-- Footer -->
<footer class="text-center" style="background-color:#ffe9d8; height:70%;">
	
<div style= "width:30%;margin-left:3%; text-align:justify; float:left;">
<a class="" href="#"><img class="logo" src="logo.png" width="75" height="75" style="margin-top:5%; margin-bottom:3%" alt="logo"></a> <br>

<a class="home-text03" style= "color:black; text-align:justify;">This 2023, Preloved by the Stars is launching itself as a platform for the influencers’ e-bazaar, bringing customers a whole new online shopping experience in collaboration with multiple social media stars and artists.</a>
	<br><br><br>
	<img src="fb.png" alt="fb" style="width: 3%; margin-top: -5%" usemap="#fb">
		<map name="fb">
			<area shape="rect" coords="0,0,80,95" href="https://www.facebook.com">
		</map>
		
	<img src="twt.png" alt="twt" style="width: 6%; margin-top: -5%; margin-left:7%" usemap="#twt">
		<map name="twt">
			<area shape="rect" coords="0,0,80,95" href="https://www.twitter.com">
		</map>
		
	<img src="linkedin.png" alt="in" style="width: 6%; margin-top: -5%;margin-left:7%" usemap="#in">
		<map name="in">
			<area shape="rect" coords="0,0,80,95" href="https://www.linkedin.com">
		</map>
		
	<img src="ig.png" alt="ig" style="width:6%; margin-top: -5%;margin-left:7%" usemap="#ig">
		<map name="ig">
			<area shape="rect" coords="0,0,80,95" href="https://www.instagram.com">
		</map>
	
	
</div>
<div style="float:right">
	<table style="width:100%">
	<tr>
      <td class="w3-right">
	  <ul class="navbar-nav" style="text-align: left; margin-left: -50%; margin-top: 25%;line-height: 200%; list-style-type: none">
	  
	  <b style="color:black;"> QUICK LINKS</b>
      <li>
        <a href="home.php" style="color: black; text-align: left">Home</a>
      </li>
      <li>
        <a href="about.php" style="color: black; text-align: left">About Us</a>
      </li>
	  <li>
        <a href="products.php" style="color: black; text-align: left">Products</a>
      </li>
	  <li>
        <a href="orders.php" style="color: black; text-align: left">Orders</a>
      </li>
	  <li>
        <a href="faqs.php" style="color: black; text-align: left">FAQs</a>
      </li>
	  <li>
        <a href="contact.php" style="color: black; text-align: left">Contact Us</a>
      </li>
	  	  
	  </ul>
      </td>
	
    </tr>
		</table>
		</div>
	
	<br />
	
	  <div style="margin-top:26%;">
          <center>
            <a style="color: black;">Copyright © 2023 Preloved, Inc. Created by: AppDev Group 7 - Mapua University Makati. All Rights Reserved.</a>
          </center>
      </div>	 
	  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-hide-small" style="color:#e55767;"><b>Go To Top</b></span>   
    <a class="w3-button" style="background-color:#e5c0ba; color:black" href="#"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>  
    </footer>

</body>
</html>