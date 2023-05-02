<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../index.php");
}

?> 
<?php
error_reporting( ~E_NOTICE );
	
	include ("config.php");
	
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_id=:user_id');
		$stmt_edit->execute(array(':user_id'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: customers.php");
	}
	
if(isset($_POST['btn_save_updates']))
	{
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];
		$user_firstname = $_POST['user_firstname'];
		$user_lastname = $_POST['user_lastname'];
		$user_address = $_POST['user_address'];

		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('UPDATE users
									     SET user_email=:user_email, 
											 user_password=:user_password, 
										     user_firstname=:user_firstname, 
											 user_lastname=:user_lastname,
											 user_address=:user_address
								       WHERE user_id=:user_id');
			$stmt->bindParam(':user_email',$user_email);
			$stmt->bindParam(':user_password',$user_password);
			$stmt->bindParam(':user_firstname',$user_firstname);
			$stmt->bindParam(':user_lastname',$user_lastname);
			$stmt->bindParam(':user_address',$user_address);
			$stmt->bindParam(':user_id',$id);
				
			if($stmt->execute()){
				?>
                <script>
				alert('Successfully Updated ...');
				window.location.href='customers.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
				 echo "<script>alert('Sorry Data Could Not Be Updated !')</script>";				
			}
		
		}
		
						
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preloved</title>
	 <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #ff8c92">
            <div class="navbar-header" style="background-color: #ff8c92">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Preloved - Administrator Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="background-color: #e4bdb8">
                    <li><a href="index.php"> &nbsp; &nbsp; &nbsp; Home</a></li>
					<li><a data-toggle="modal" data-target="#uploadModal"> &nbsp; &nbsp; &nbsp; Upload Items</a></li>
					<li class="active"><a href="customers.php"> &nbsp; &nbsp; &nbsp; User Management</a></li>
					<li><a href="items.php"> &nbsp; &nbsp; &nbsp; Product Management</a></li>
					<li><a href="items.php"> &nbsp; &nbsp; &nbsp; Order Management</a></li>
					<li><a href="orderdetails.php"> &nbsp; &nbsp; &nbsp; Transaction Management</a></li>
					
                    
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user" style="margin-right:2%">
                   
					<li><a href="addinfluencer.php"><i class="glyphicon glyphicon-user"></i> Add Influencer</a></li>
				   
					<li><a href="adduser.php"><i class="glyphicon glyphicon-user"></i> Add User</a></li>
                            
                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>

                </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            
			
			
			
			
			
			
			
			
		<div class="clearfix"></div>

<form method="post" enctype="multipart/form-data" class="form-horizontal" style=" width: 60%;  margin-left: 25%;">
	
    
    <?php
	if(isset($errMSG)){
		?>
       
        <?php
	}
	?>
			 <div class="alert alert-info">
                        
                          <center> <h3><strong>Update Customer Details</strong> </h3></center>
						  
						  </div>
						  
						 <table class="table table-bordered table-responsive" style="color:black">
	 
    <tr>
    	<td><label class="control-label">Email of Customer</label></td>
        <td><input class="form-control" type="text" name="user_email" value="<?php echo $user_email; ?>" required /></td>
    </tr>
	
	 <tr>
    	<td><label class="control-label">Password</label></td>
        <td><input id="inputprice" class="form-control" type="password" name="user_password" value="<?php echo $user_password; ?>" required /></td>
    </tr>
	
	<tr>
    	<td><label class="control-label">First Name of Customer</label></td>
        <td><input id="inputprice" class="form-control" type="text" name="user_firstname" value="<?php echo $user_firstname; ?>" required /></td>
    </tr>
	
	<tr>
    	<td><label class="control-label">Last Name of Customer</label></td>
        <td><input id="inputprice" class="form-control" type="text" name="user_lastname" value="<?php echo $user_lastname; ?>" required /></td>
    </tr>
	
	<tr>
    	<td><label class="control-label">Address of Customer</label></td>
        <td><input id="inputprice" class="form-control" type="text" name="user_address" value="<?php echo $user_address; ?>" required /></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-primary">
        <span class="glyphicon glyphicon-save"></span> Update
        </button>
        
        <a class="btn btn-danger" href="customers.php"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>
        
        </td>
    </tr>
    
    </table>
    
</form>
						  
						
				<br />
				<br />
				<br /><br />
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	 
	 <div class="alert alert-default" style="background-color: #ff8c92">
                    <footer>
					<p style="color:white;text-align:center;">
						Copyright © 2023 Preloved, Inc. Created by: AppDev Group 7 - Mapua University Makati. All Rights Reserved.

					</p>
					</footer>
				</div>';	  
						  
						  
			
			
            
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
