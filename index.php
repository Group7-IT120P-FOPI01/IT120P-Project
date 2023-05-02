<?php
session_start();

if(!$_SESSION['user_email'])
{

    header("Location: ../index.php");
}
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>

<?php
 include("config.php");
 extract($_SESSION); 
		  $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_email =:user_email');
		$stmt_edit->execute(array(':user_email'=>$user_email));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
		?>
		
		<?php
 include("config.php");
		  $stmt_edit = $DB_con->prepare("select sum(order_total) as total from orderdetails where user_id=:user_id and order_status='Ordered'");
		$stmt_edit->execute(array(':user_id'=>$user_id));
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
</style>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-pink.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />
	
	
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	 <link rel="shortcut icon" href="logo.png" type="image/x-icon" />
    <title>Preloved By The Stars</title>
	 <link rel="shortcut icon" href="logo.png" type="image/x-icon" />
  
</head>

<body style="font-family:Arial;">

<!-- Navigation Menu -->
<div class="w3-top" style="height: 70px;">
 <div class=" w3-bar w3-left-align" style="background-color:#f2ecd9; height: 100%">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d5" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  
  <a class="navbar-brand w3-left" href="index.php"><img class="logo" src="logo.png" width="55" height="50" style="margin-top:-5;margin-left:0%; margin-bottom:20%" alt="logo"></a>
  
  <strong>
  <a href="about.php" class="w3-bar-item nav-link w3-button" style="margin-left: -1%;margin-top:1%;"><i></i>About Us</a>
  <a href="shop.php?id=1" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%;">Products</a>
  <a href="orders.php" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%;">Orders</a>
  <a href="faqs.php" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%">FAQs</a>
  <a href="contact.php" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%" >Contact Us</a>


<a href="cart_items.php" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%" >Shopping Cart</a>
<a href="view_purchased.php" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%" >Purchases</a>



<a href="orders.php" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%;margin-left:18%"><span class='glyphicon glyphicon-shopping-cart'></span> Total Price Ordered: &#8369; <?php echo $total; ?> </b></a>

<div class="w3-dropdown-hover w3-mobile" style="margin-top:1%;">
      <a class="w3-button"><i class="fa fa-user"></i> <?php echo $user_email; ?><b class="caret"></b> <i class="fa fa-caret-down"></i></a>
      <div class="w3-dropdown-content w3-bar-block">
	    <a class="w3-bar-item w3-button w3-mobile" data-toggle="modal" data-target="#setAccount" style="color: #ef8e8d;"><i class="fa fa-gear" style="margin-right:3%"></i>Settings</a>
		
        <a href="logout.php" class="w3-bar-item w3-button w3-mobile" style="color: #ef8e8d;"><i class="fa fa-power-off" style="margin-right:3%"></i>Logout</a>        
	 </div>
	</div>
	
</strong>
  
  </div>
  </div>


<img class="header" src="home_header.png" width="100%" height="90%" alt="header"> <!-- Header-->
  <img class="design" src="home_design.png" width="100%" height="45%" alt="design">
  
  <!-- Preloved Influencers Title -->
  <div style= "margin-top:-1%">
  <center>
  <img class="design" src="curl1.png" width="15%" height="17%" alt="design" style= "margin-top:3%">
  <img class="design" src="preloved_influencers.png" width="20%" height="14%" alt="design" style= "margin-top:-3%">
  <img class="design" src="curl2.png" width="15%" height="17%" alt="design" style= "margin-top:3%">
  </center>
  </div>
  <br />
  
  <!-- Influencers -->
  
  <!-- 1st Row -->
  <div>
  <center>
  <img class="star" src="donny.png" alt="donny" width="15%" height="50%" style= "margin-right:3%">  
  <img class="star" src="belle.png" alt="belle" width="15%" height="50%" style= "margin-right:3%">
  <img class="star" src="james.png" alt="james" width="15%" height="50%">
  <br />
  <br />
  <b class="w3-bar-item" style="padding:15px;background-color: #FF8C92; color:white; border-radius:35px; margin-left:0%;margin-right:8%">Donny Pangilinan</b>
  
  <b class="w3-bar-item" style="padding:15px;background-color: #FF8C92; color:white; border-radius:35px; margin-right:10%">Belle Mariano</b>
  
  <b class="w3-bar-item" style="padding:15px;background-color: #FF8C92; color:white; border-radius:35px;margin-left:-1%;margin-right:2%">James Reid</b>
  
  <br />
  <br />
  <br />
  
  <!-- 2nd Row -->
  <img class="star" src="REI.png" alt="rei" width="15%" height="50%" style= "margin-right:3%">  
  <img class="star" src="nadine.png" alt="nadine" width="15%" height="50%" style= "margin-right:3%">
  <img class="star" src="andrea.png" alt="andrea" width="15%" height="50%">
  <br />
  <br />
  <b class="w3-bar-item" style="padding:15px;background-color: #FF8C92; color:white; border-radius:35px; margin-left:3%;margin-right:10%">Rei Germar</b>
  
  <b class="w3-bar-item" style="padding:15px;background-color: #FF8C92; color:white; border-radius:35px; margin-right:6%">Nadine Lustre</b>
  
  <b class="w3-bar-item" style="padding:15px;background-color: #FF8C92; color:white; border-radius:35px;margin-left:2%;margin-right:2%">Andrea Brillantes</b>
  
  <br />
  <br />
  <br />
  
  <!-- 3rd Row -->
  <img class="star" src="daniel.png" alt="daniel" width="15%" height="50%" style= "margin-right:3%">  
  <img class="star" src="kathryn.png" alt="kathryn" width="15%" height="50%" style= "margin-right:3%">
  <img class="star" src="Liza.png" alt="liza" width="15%" height="50%">
  <br />
  <br />
  <b class="w3-bar-item" style="padding:15px;background-color: #FF8C92; color:white; border-radius:35px; margin-left:2%;margin-right:8%">Daniel Padilla</b>
  
  <b class="w3-bar-item" style="padding:15px;background-color: #FF8C92; color:white; border-radius:35px; margin-right:5%">Kathryn Bernardo</b>
  
  <b class="w3-bar-item" style="padding:15px;background-color: #FF8C92; color:white; border-radius:35px;margin-left:3%;margin-right:2%">Liza Soberano</b>
  
   <br />
  <br />
  <br />
  
  <a href="shop.php?id=1" class="w3-bar-item w3-button" title="Search" style="padding-left:30px; padding-right:30px; background-color:#e55767; color:white; border-radius: 20px"><b>Visit Shop</b></a>
  
  

  
  </center>
  </div>
  
 <br />
<br />

<img class="design" src="home_design2.png" width="100%" height="45%" alt="design">
 
     
      
	  
	  
	<!-- Footer -->
<footer class="text-center" style="background-color:#ffe9d8; height:80%;">
	
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
	  
	  <b style="color:black;"> QUICK LINKS</b><br>
      <li>
        <a href="home.php" style="color: black; text-align: left">Home</a>
      </li>
	  <br>
      <li>
        <a href="about.php" style="color: black; text-align: left">About Us</a>
      </li>
	  <br>
	  <li>
        <a href="products.php" style="color: black; text-align: left">Products</a>
      </li>
	  <br>
	  <li>
        <a href="orders.php" style="color: black; text-align: left">Orders</a>
      </li>
	  <br>
	  <li>
        <a href="faqs.php" style="color: black; text-align: left">FAQs</a>
      </li>
	  <br>
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
            <h5 style="color: black;">Copyright © 2023 Preloved, Inc. Created by: AppDev Group 7 - Mapua University Makati. All Rights Reserved.</h5>
			<br>
          </center>
      </div>	  
	  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-hide-small" style="color:#e55767;"><b>Go To Top</b></span>   
    <a class="w3-button" style="background-color:#e5c0ba; color:black" href="#"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>  
    </footer>  
 							       
                
 
	
	<!-- Mediul Modal -->
        <div class="modal fade" id="setAccount" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Account Settings</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="settings.php">
                   <fieldset>
					
						
                            <p>Firstname:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Firstname" name="user_firstname" type="text" value="<?php  echo $user_firstname; ?>" required>
                           
							 
							</div>
							
							
							<p>Lastname:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Lastname" name="user_lastname" type="text" value="<?php  echo $user_lastname; ?>" required>
                           
							 
							</div>
							
							<p>Address:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Address" name="user_address" type="text" value="<?php  echo $user_address; ?>" required>
                           
							 
							</div>
							
							<p>Password:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Password" name="user_password" type="password" value="<?php  echo $user_password; ?>" required>
                           
							 
							</div>
							
							<div class="form-group">
							
                                <input class="form-control hide" name="user_id" type="text" value="<?php  echo $user_id; ?>" required>
                           
							 
							</div>
							
						
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-block btn-success btn-md" name="user_save">Save</button>
				
				 <button type="button" class="btn btn-block btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
	  	  <script>
   
    $(document).ready(function() {
        $('#priceinput').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script>
</body>
</html>
