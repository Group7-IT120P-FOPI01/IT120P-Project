<?php
session_start();

if(!$_SESSION['user_email'])
{

    header("Location: ../index.php");
}
?>
<?php
 include("config.php");
 extract($_SESSION); 
		  $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_email =:user_email');
		$stmt_edit->execute(array(':user_email'=>$user_email));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
		?>
<style>
body {
  font-family: Arial, sans serif;
  background-color: white;
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

.title{
	float:right;
	 margin-left: -20%;
}

.title2{
	float:left;
	 margin-right: -20%;
}
		   
</style>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-pink.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon" />
    <title>Preloved By The Stars</title>
	 <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon" />
  
</head>
<body style="font-family:Arial;">
         
	 <div class="w3-top">
 <div class=" w3-bar w3-left-align" style="background-color:#f2ecd9; height: 100%">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d5" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  
  <a class="navbar-brand w3-left" href="index.php"><img class="logo" src="logo.png" width="55" height="50" style="margin-top:20%;margin-left:15%; margin-bottom:20%" alt="logo"></a>
  
  <strong>
  <a href="index.php" class="w3-bar-item nav-link w3-button" style="margin-left: 1%;margin-top:1%;"><i></i>Home</a>
  <a href="about.php" class="w3-bar-item nav-link w3-button" style="margin-left: 1%;margin-top:1%;"><i></i>About Us</a>
  <a href="faqs.php" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%">FAQs</a>
  <a href="contact.php" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%" >Contact Us</a>
 
       <a href="logout.php" class="w3-bar-item w3-button w3-right" title="Search"style="margin-top:1%;margin-left:2%;margin-right:2%; padding-left:30px; padding-right:30px;background-color: white; color:#ef8e8d; border-radius: 5px;">Logout</a>

  </strong>
  </div>
  </div>
  <br />
<br />
<br />

 
  <img class="header" src="assets/img/faqs.png" width="100%" height="80%" alt="header"> <!-- Header-->
  <img class="design" src="home_design.png" width="100%" height="40%" alt="design">
  
 
  <!-- FAQS -->

        <div class='container' style="margin-top:3%; margin-left:5%; margin-right:5%;color:black;">
            <div class="row">
                <div>
                    <p style='font-size:1.3em'>1. Do you implement hidden costs such as VAT?</p>
                </div>
                <div style="margin-left:3%;">
                    <p>All items are VAT_inclusive. We will not add any cost to your order except from the shipping fee.</p>
                </div>
            </div>
            
            <div class="row">
                <div>
                    <p style='font-size:1.3em'>2. How much is your shipping fee?</p>
                </div>
                <div style="margin-left:3%;">
                    <p>Our current shipping rate is P99 for both metro manila and provincial orders</p>
                </div>
            </div>
            
            <div class="row">
                <div>
                    <p style='font-size:1.3em'>3. How long will I wait for my order?</p>
                </div>
                <div style="margin-left:3%;">
                    <p>Orders will take 6-10 business days (10-13 days for provincial address) to be processed. Items ordered are only produced once your payment has been validated</p>
                </div>
            </div>
            
            <div class="row">
                <div>
                    <p style='font-size:1.3em'>4. Am I required to create an account before buying?</p>
                </div>
                <div style="margin-left:3%;">
                    <p>Yes. Before accessing the onlien shopping features. You are requried to create an account. To do so, click the register buttin in the website and fill-up the registratio nform</p>
                </div>
            </div>
            
            <div class="row">
                <div>
                    <p style='font-size:1.3em'>5. Am I allowed to cancel or remove my orders?</p>
                </div>
               <div style="margin-left:3%;">
                    <p>Yes, you may cancel or remove your orders if you have not paid for hte ordr yet. You may also modify your order before chechking-out so ensure that the items in your cart are correct efore proceeding.
</p>
                </div>
            </div>
            
            <div class="row">
                <div>
                    <p style='font-size:1.3em'>6. I can't find the product that I'm alooking for? What should i do?</p>
                </div>
                <div style="margin-left:3%;">
                    <p>If the product is missiong from the lsit of products displayed in the website, it means that thte influencer is not selling the item anymore or it is not currently available because it is oout of stock. Kindly wait for the re-stocking of items and you may check the website rguarlay for more updates.</p>
                </div>
            </div>
            
            <div class="row">
                <div>
                    <p style='font-size:1.3em'>7. How can I track my orders?</p>
                </div>
                <div style="margin-left:3%;">
                    <p>You may track your orders after logging in to your account and click the orders apge from the home page. From the order page, you are able to track the status of your order.</p>
                </div>
            </div>
        </div>


 <br />
<br />

<img class="design" src="home_design2.png" width="100%" height="40%" alt="design">
 
     
      
	  
	  
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
	  
	  
	  
	  
	  
	  
<!-- Script -->
      
   
   
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
</body>
</html>






   
   