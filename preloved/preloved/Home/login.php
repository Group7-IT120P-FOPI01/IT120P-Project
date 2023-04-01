 <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);		
        background-color: var(--dl-color-gray-white);

      }
	  .login-container {
  width: 100%;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  box-shadow: 0 0 10px #ccc;
}
  color: white;
}

input[type="text"],
input[type="password"] {
	text-align: center;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type="submit"] {
	text-align: center;
  width: 100%;
  padding: 10px;
  background-color: #e55767;
  color: #fff;
  border: 0;
  cursor: pointer;
  font-size: 16px;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

    </style>
	<style data-section-id="dropdown">
      [data-thq="thq-dropdown"]:hover > [data-thq="thq-dropdown-list"] {
          display: flex;
        }

        [data-thq="thq-dropdown"]:hover > div [data-thq="thq-dropdown-arrow"] {
          transform: rotate(90deg);
        }
    </style>

<html lang="en">
  <head>
	<link rel="icon" href="logo.png" type="image/png">
    <title>Preloved by the Stars</title>
    <meta property="og:title" content="Preloved by the Stars" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

   
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
   
        <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./home.css" rel="stylesheet" />

      <div class="home-container">
        <header data-role="Header" class="home-header">
          <img
            alt="logo"
            src="public/playground_assets/logo-500h.png"
            class="home-icon"
          />
          <nav
            class="navigation-links3-nav navigation-links3-root-class-name12">
            <span class="navigation-links3-text"><span>About</span></span>
            <span class="navigation-links3-text1"><span>Products</span></span>
            <span class="navigation-links3-text2"><span>FAQs</span></span>
            <span class="navigation-links3-text3"><span>Contact Us</span></span>
          </nav>
          <div class="home-container1"></div>
          <div class="home-btn-group">
            <button class="home-button button" href="login.php">
              <span>
                <span>&nbsp; &nbsp;</span>
                <span class="home-text02">Login</span>
              </span>
            </button>
            <button class="home-button1 button">&nbsp;Register</button>
          </div>
        </header>

<body>
<form action = "login.php" method="POST" style= "background-image:url('login-img.png'); width=50%;"> <!-- START OF FORM -->
<center>


<fieldset style="text-indent:-20px; width: 100%; padding: 1.5%;"> 
<br />
<br />
<table>



<tr>
  
<td><input type = "text" name = "lUsername" required = "required" placeholder = "Username"/> <!-- REGISTER USERNAME -->
</tr>

<tr>

<td><input type = "password" name = "lPassword" required = "required" placeholder = "Password"/> <!-- REGISTER PASSWORD -->
</tr>

<tr>
<td><input type="submit" name ="lSubmit" value="Login"/></td> <!-- REGISTER BUTTON -->
</tr>


</table>

<a href = 'register.php'> <p> Don't Have an Account? Register Here! </p></a></td> <!-- REDIRECT TO LOGIN -->
<a href = 'index.html'> <p> Return to Home </p></a></td> <!-- REDIRECT TO Home Page -->
</center>
</fieldset>
	<br />
	<br />
</form> <!-- END OF FORM -->





<!-- Start of PHP--> 
<?php error_reporting(E_ERROR | E_PARSE);
session_start(); //start the session
if (!empty($_POST["lUsername"]) || !empty($_POST["lPassword"])){ //function works if fields are not empty
doLogin();
}


function doLogin(){ //start of login function
$lUsername = $_POST['lUsername']; //variable for taken username
$lPassword = $_POST['lPassword']; //variable for taken password

//database details
$db_name = "deliverydb"; //DATABASE NAME FOR THE PROJECT
$db_username = "root";
$db_pass = "";
$db_host = "localhost";
$con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error()); //connect to server
$querylogin = "SELECT * from login WHERE username = '$lUsername'"; //select matching username from login table 
$resultslogin = mysqli_query($con, $querylogin); //query the login table
$existslogin = mysqli_num_rows($resultslogin); //Checks if username exists


if($existslogin != ""){ //if there are no returning rows or no existing username
while($row = mysqli_fetch_assoc($resultslogin)){ //display all rows from query
$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
$table_password = $row['password']; // the first password row is passed on to $table_password, and so on until the query is finished
$table_id = $row['login_id']; // the first id row is passed on to $table_id, and so on until the query is finished
}

if(($lUsername == $table_users) && ($lPassword == $table_password)){ // checks if there are any matching fields

//checks if login_id from LOGIN is matching with login_id from USER
$queryverif = "SELECT * from user WHERE login_id = '$table_id'"; //select matching login_id from user table 
$resultsverif = mysqli_query($con, $queryverif); //query the user table
$existsverif = mysqli_num_rows($resultsverif); //Checks if user exists

if($existsverif != ""){ //if matching, check verification if approved or rejected
while($rowB = mysqli_fetch_assoc($resultsverif)){ //display all rows from query
$table_accverif = $rowB['account_verification']; // the first account_verification row is passed on to $table_accverif, and so on until the query is finished
}

if($table_accverif == "Approved"){ //if approved proceed to login
$_SESSION['loginid'] = $table_id; //set the loginid in a session. This serves as a global variable
header("location: home.php"); // redirects the user to the authenticated home page
}

else{ //if rejected show error message
Print '<script>alert("Account not yet approved!");</script>'; //Prompts the user
}
	
}

}

else{ //if details are incorrect
Print '<script>alert("Incorrect details!");</script>'; //Prompts the user
Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
}

} 

} //end of login function
?>

<!-- Footer -->
<footer class="text-center w3-theme-d5" style= "background-color:#e55767">
	
	<br />
	<table style="margin-left: 8%; width:110% ">
	  <tr>
      <td>
	  <ul class="navbar-nav" style="text-align: left; margin-left: 8%; line-height: 200%; list-style-type: none"><b>
      <li>
        <a href="home.php" style="color: white; text-align: left">Home</a>
      </li>
      <li>
        <a href="about.php" style="color: white; text-align: left">About Us</a>
      </li>
	  <li>
        <a href="contact.php" style="color: white; text-align: left">Contact Us</a>
      </li>
	  <li>
        <a href="products.php" style="color: white; text-align: left">Products</a>
      </li></b>
	  </ul>
      </td>
	<td><center>
	<p style="color:white"><b>Follow us on our Facebook Page.</b></p>		
		<img src="social.png" alt="social" style="width: 7.5%; margin-top: -5%" usemap="#social">
		<map name="social">
			<area shape="rect" coords="0,0,80,95" href="https://www.facebook.com/barangayphilamcouncil/">
		</map></center>
	</td>
    </tr>
		</table>
	
	<br />
	  <div class="container">
        <div class="row">
          <div class="col-12"><center>
            <p style="color: white">Copyright © 2023 Preloved. All Rights Reserved.</p>
          </center></div>
        </div>
      </div>
	  
	  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
    </footer>

</body>
</html>