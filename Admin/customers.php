<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../index.php");
}

?>

<?php

	require_once 'config.php';
	
	if(isset($_GET['delete_id']))
	{
		
		
		
	
		$stmt_delete = $DB_con->prepare('DELETE FROM users WHERE user_id =:user_id');
		$stmt_delete->bindParam(':user_id',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: customers.php");
	}

?>

<?php

	require_once 'config.php';
	
	if(isset($_GET['delete_id']))
	{
		
		
		
	
		$stmts_delete = $DB_con->prepare('DELETE FROM influencers WHERE influencer_id =:influencer_id');
		$stmts_delete->bindParam(':influencer_id',$_GET['delete_id']);
		$stmts_delete->execute();
		
		header("Location: customers.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preloved.com</title>
	 <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/datatables.min.js"></script>

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
  <a href="index.php" class="w3-bar-item nav-link w3-button" style="margin-left: 1%;margin-top:1%;"><i></i>Home</a>
  <a href="index.php" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%;">Upload Items</a>
  <a href="items.php" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%">Item Management</a>
  <a href="customers.php" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%" >Customer Management</a>
  <a href="orderdetails.php" class="w3-bar-item w3-button w3-hide-small" style="margin-top:1%" >Order Details</a>
   <br />
  </ul>
                <ul class="nav navbar-nav navbar-right navbar-user" style="margin-right:2%">
                   
					<li><a href="addinfluencer.php"><i class="glyphicon glyphicon-user"></i> Add Influencer</a></li>
				   
					<li><a href="adduser.php"><i class="glyphicon glyphicon-user"></i> Add User</a></li>
                            
                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>

                </ul>
 <br />
 <br />
  <br />

  </strong>
  </div>
  </div>	
  
<br />
<br />
<br />
 <br /> 
<!-- Influencer List -->

<div id="page-wrapper">
            
			<br><br>
	
			 <div style="background-color: white;">
                        
                          <center> <h3 style="font-family: Copperplate Gothic; font-size: 360%; margin-left: 10%;"><strong>Influencer List</strong> </h3></center>
						  
						  </div>
						  
						  <br><br><br>
						  
						  
            <table class="display table table-bordered" id="example" cellspacing="0" style="color: black; width: 60%;  margin-left: 25%;">
              <thead>
                <tr>
                  <th>Influencer Email</th>
                  <th>Name</th>
				  <th>Address</th>
                  <th>Actions</th>
                 
                </tr>
              </thead>
              <tbody>
			  <?php
include("config.php");
	$stmts = $DB_con->prepare('SELECT * FROM influencers');
	$stmts->execute();
	
	if($stmts->rowCount() > 0)
	{
		while($row=$stmts->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
			
			?>
                <tr>
                  
                 <td style="width: 30%"><?php echo $influencer_email; ?></td>
				 <td><?php echo $influencer_firstname; ?> <?php echo $influencer_lastname; ?></td>
				 <td><?php echo $influencer_address; ?></td>
				 
				 <td style="width: 38%">
				
				 
				<a class="btn btn-success" href="items.php?view_id=<?php echo $row['influencer_id']; ?>"><span class='glyphicon glyphicon-list'></span> View Products</a> 
				<a class="btn btn-warning" href="editInflu.php?edit_id=<?php echo $row['influencer_id']; ?>" title="click for edit" onclick="return confirm('Are you sure edit this Influencer?')"><span class='glyphicon glyphicon-edit'></span> Edit Account</a>   		
				<a class="btn btn-danger" href="?delete_id= <?php echo $row['influencer_id']; ?>" title="click for delete" onclick="return confirm('Are you sure to remove this Influencer?')">
				<span class='glyphicon glyphicon-trash'></span> Delete Account</a>
				
                  </td>
                </tr>
               
              <?php
		}
		 
		echo "</tbody>";
		echo "</table>";
	}else
	{
		?>
		
			
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	}
	
?>

</div>

<!--User Accounts-->

<div id="page-wrapper">
            
			<br><br>
	
			 <div style="background-color: white">
                        
                          <center> <h3 style="font-family: Copperplate Gothic; font-size: 360%; margin-left: 10%;"><strong>User Accounts</strong> </h3></center>
						  
						  </div>
						  
						  <br><br><br>
						  
            <table class="display table table-bordered" id="example" cellspacing="0" style="color: black; width: 60%;  margin-left: 25%;">
              <thead>
                <tr>
                  <th>Customer Email</th>
                  <th>Name</th>
				  <th>Address</th>
                  <th>Actions</th>
                 
                </tr>
              </thead>
              <tbody>
			  <?php
include("config.php");
	$stmt = $DB_con->prepare('SELECT * FROM users');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
			
			?>
                <tr>
                  
                 <td style="width: 30%"><?php echo $user_email; ?></td>
				 <td><?php echo $user_firstname; ?> <?php echo $user_lastname; ?></td>
				 <td><?php echo $user_address; ?></td>
				 
				 <td style="width: 38%">
				 
				<a class="btn btn-success" href="view_orders.php?view_id=<?php echo $row['user_id']; ?>"><span class='glyphicon glyphicon-list'></span> View Orders</a> 
				<a class="btn btn-warning" href="editUser.php?edit_id=<?php echo $row['user_id']; ?>" title="click for edit" onclick="return confirm('Are you sure edit this User?')"><span class='glyphicon glyphicon-edit'></span> Edit Account</a> 
                <a class="btn btn-danger" href="?delete_id=<?php echo $row['user_id']; ?>" title="click for delete" onclick="return confirm('Are you sure to remove this User?')">
				<span class='glyphicon glyphicon-trash'></span> Delete Account</a>
				
                  </td>
                </tr>
               
              <?php
		}
		echo "</tbody>";
		echo "</table>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";

		echo '	<div class="alert alert-default" style="background-color: #ff8c92">
                    <footer>
					<p style="color:white;text-align:center;">
						Copyright © 2023 Preloved, Inc. Created by: AppDev Group 7 - Mapua University Makati. All Rights Reserved.

					</p>
					</footer>
				</div>';
	}
	else
	{
		?>
		
			
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	}
	
?>

		
		<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	  $('#example').dataTable();
	});
    </script>
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
