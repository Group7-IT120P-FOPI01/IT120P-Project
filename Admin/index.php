<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<style>
@import "https://unpkg.com/open-props";

* {
  box-sizing: border-box;
}

body {
 background: linear-gradient(to bottom, #e5c0ba, #f4dcd8);
  display: grid;
  place-items: center;
  min-height: 100vh;
}

button {
  font-family: Arial;
  font-weight: var(--font-weight-6);
  font-size: 20px;
  color: var(--gray-8);
  background: var(--gray-0);
  border: 0;
  padding: calc(var(--size-4) * 3) calc(var(--size-8) * 3);
  transform: translateY(calc(var(--y, 0) * 1%)) scale(var(--scale));
  transition: transform 0.1s;
  position: relative;
}

button:hover {
  --y: -10;
  --scale: 1.1;
  --border-scale: 1;
}

button:active {
  --y: 5%;
  --scale: 0.9;
  --border-scale: 0.9, 0.8;
}

button:before {
  content: "";
  position: absolute;
  inset: calc(var(--size-3) * -1);
  border: var(--size-2) solid var(--gray-0);
  transform: scale(var(--border-scale, 0));
  transition: transform 0.125s;
  
  --angle-one: 105deg;
  --angle-two: 290deg;
  --spread-one: 30deg;
  --spread-two: 40deg;
  --start-one: calc(var(--angle-one) - (var(--spread-one) * 0.5));
  --start-two: calc(var(--angle-two) - (var(--spread-two) * 0.5));
  --end-one: calc(var(--angle-one) + (var(--spread-one) * 0.5));
  --end-two: calc(var(--angle-two) + (var(--spread-two) * 0.5));
  
  mask: conic-gradient(
    transparent 0 var(--start-one),
    white var(--start-one) var(--end-one),
    transparent var(--end-one) var(--start-two),
    white var(--start-two) var(--end-two),
    transparent var(--end-two)
  );
  
  z-index: -1;
}
</style>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preloved by the Stars</title>
	 <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-pink.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>

    
       
	 <div class="w3-top">
 <div class=" w3-bar w3-left-align" style="background-color:#f2ecd9; height: 100%">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d5" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  
  <a class="navbar-brand w3-left" href="#"><img class="logo" src="logo.png" width="65" height="60" style="margin-top:-2%;margin-left:15%; margin-bottom:20%" alt="logo"></a>
  <strong>
   <br />
  <a class="navbar-brand" href="index.php">Preloved by the Stars - Administrator Panel</a>
  
     <a href="logout.php" class="w3-bar-item w3-button w3-right" title="Search"style="margin-top:1%;margin-left:2%;margin-right:2%; padding-left:30px; padding-right:30px;background-color: white; color:#ef8e8d; border-radius: 5px;">Logout</a>

 <br />
 <br />
  <br />

  </strong>
  </div>
  </div>	
  
<br />
<br />
<br />

	   <a data-toggle="modal" data-target="#uploadModal"><button>Upload Items</button> </a>

       <a href="items.php"> <button>Items Management</button> </a>
	   
	   <a href="customers.php"><button>User Management</button></a>
	   
	   <a href="orderdetails.php"><button>Order Details</button></a>

    <!-- /#wrapper -->

	
	<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:black;background-color:#f2ecd9" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:black" class="modal-title" id="myModalLabel">Upload Item</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="additems.php">
                   <fieldset>
					
						
                            <p>Name of Item:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Name of Item" name="item_name" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							
							
							<p>Price:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Price" name="item_price" type="text" required>
                           
							 
							</div>
							
							
							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" required/>
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
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
