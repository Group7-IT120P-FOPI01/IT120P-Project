<?php
session_start();

?>
<?php
include("db_conection.php");
if(isset($_POST['register']))
{
$user_email = $_POST['ruser_email'];
$user_password = $_POST['ruser_password'];
$user_firstname = $_POST['ruser_firstname'];
$user_lastname = $_POST['ruser_lastname'];
$user_address = $_POST['ruser_address'];
$phone_num = $_POST['ruser_num'];


$check_user="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Customer is already exist, Please try another one!')</script>";
 echo"<script>window.open('index.php','_self')</script>";
exit();
    }
 
$saveaccount="insert into users (user_email,user_password,user_firstname,user_lastname,user_address,phone_num) VALUE ('$user_email','$user_password','$user_firstname','$user_lastname','$user_address','$phone_num' )";
mysqli_query($dbcon,$saveaccount);
echo "<script>alert('Data successfully saved, You may now login!')</script>";				
echo "<script>window.open('index.php','_self')</script>";
	
}

?>


<style>
body {
  font-family: Arial, sans serif;
  background-color: #e4bdb8;
  color: #ef8e8d;
}


.login-container {
  width: 500px;
  margin: 0 auto;
  background-color: #black;
  padding: 20px;
  box-shadow: 0 0 10px #ccc;
}

h1 {
  text-align: center;
  margin-bottom: 30px;
  color: white;
}


input[type="text"],input[type="email"],input[type="tel"],
input[type="password"] {
  text-align: center;
  width: 155%;
  padding: 12px 20px;
  margin: 4% 0 0 -30%;
  box-sizing: border-box;
  border: 3px solid #ccc;
  border-radius: 50px;
 
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type="submit"] {
  text-align: center;
  width: 50%;
  padding: 10px;
  background-color:white;
  color: #ef8e8d;
  border: 0;
  border-radius:5px;
  cursor: pointer;
  font-size: 16px;
  font-weight:bold;
  align:center;
  margin-left:25%;
}

input[type="submit"]:hover {
  background-color: #e65868;
  color:white;
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
<title>Registration Page</title>
 <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon" />
   
  </div>
</div>
</head>

<body style="font-family:Arial;">
<div class="w3-top">
 <div class=" w3-bar w3-left-align" style="background-color:#f2ecd9; height: 100%">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d5" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  
  <a class="navbar-brand w3-left" href="index.php"><img class="logo" src="logo.png" width="55" height="50" style="margin-top:20%;margin-left:15%; margin-bottom:20%" alt="logo"></a>
  <strong>
  <a href="about.php" class="w3-bar-item nav-link w3-button" style="margin-left: 1%;margin-top:1%;"><i></i>About Us</a>
  <a href="products.php" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%;">Products</a>
  <a href="faqs.php" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%">FAQs</a>
  <a href="contact.php" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%" >Contact Us</a>
  
     <a href="login.php" class="w3-bar-item w3-button w3-right" title="Search"style="margin-top:1%;margin-left:2%;margin-right:2%; padding-left:30px; padding-right:30px;background-color: white; color:#ef8e8d; border-radius: 5px;">Login</a>
  <a href="register.php" class="w3-bar-item w3-button w3-right" title="Search"style="margin-top:1%; padding-left:30px; padding-right:30px;background-color: white; color:#ef8e8d; border-radius: 5px;">Register</a>
 
  </strong>
  </div>
  </div>
  
  <br/>



<form action = "register.php" method="POST"> <!-- START OF FORM -->
<center>

<img src="login-img.png" alt="image" style = "float:left;margin-top:-1%;margin-left:1%;margin-right:1%; height:100%; width:50%">
<fieldset style="width: 45%; margin-top:10%;margin-bottom:2.5%;padding: 1.5%; background-color: #ff8c92; border-radius:3%;box-shadow: inset 0 0 10px #574d4f"> 

<h2 style="color:white;"><strong>Sign up in seconds</strong></h2>

<table>
<tr>
<td><h3 style="color:white;margin-left:-50%;"><b>First Name</b></h3></td>
<td><input type = "text" name = "ruser_firstname" required = "required" placeholder = "First Name"/>
</tr>

<tr>
<td><h3 style="color:white;margin-left:-50%;"><b>Last Name</b></h3></td>
<td><input type = "text" name = "ruser_lastname" required = "required" placeholder = "Last Name"/>
</tr>

<tr>
<td><h3 style="color:white;margin-left:-50%;"><b>Email</b></h3></td>
<td><input type = "email" name = "ruser_email" required = "required" placeholder = "Email"/> <!-- REGISTER EMAIL/USERNAME -->
</tr>

<tr>
<td><h3 style="color:white;margin-left:-50%;"><b>Phone No.</b></h3></td>
<td><input type = "text" name = "ruser_num" required = "required" placeholder="Format: 09123456789"/>
</tr>

<tr>
<td><h3 style="color:white;margin-left:-50%;"><b>Street Address</b></h3></td>
<td><input type = "text" name = "ruser_address" required = "required" placeholder = "Street Address"/> 
</tr>

<tr>
<td><h3 style="color:white;margin-left:-50%;"><b>Password<b></h3></td>
<td><input type = "password" name = "ruser_password" required = "required" placeholder = "Password"/> <!-- REGISTER PASSWORD -->
</tr>

<tr>
<td colspan="2"><input type="submit" name ="register" value="Submit" style="margin-top:5%"/></td> <!-- REGISTER BUTTON -->
</tr>

</table>
<a href = 'login.php'> <p style="color:black"> Already Have an Account? <u>Login Here!</u> </p></a></td> <!-- REDIRECT TO REGISTER -->

</center>
</fieldset>	
</form> <!-- END OF FORM -->



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