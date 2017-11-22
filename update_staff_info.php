<?php
	$connection = mysqli_connect("localhost","root","");
  	if(!@mysqli_select_db($connection,"admission"))die("DB Not Found");

  	$var = $_GET['id'];

  	$query = "SELECT * FROM `staff_table` WHERE `id` = '$var'";
	$run = mysqli_query($connection, $query);
	$record = mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>

	<meta charset="UTF-8">
  	<meta name="description" content="HostelManagement system">
  	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="header">
					<h3>HOSTEL MANAGEMENT SYSTEM (Admin)</h3>
				</div>
			</div>
			<div class="row">
				<button type="button" class="btn btn-default btn-lg btn-block btnDashboard"><a href="index.php">DASHBOARD</a></button>
			</div>
			
			<form action="updatestaffaction.php?id=<?php echo$var ?>" method="post" style="margin-bottom: 40px;">
	    		<h5>Staff Information</h5>

		  		<div class="form-row">
			  		<div class="form-group col-md-6">
			     		 <label for="inputEmail4">First Name</label>
			      		<input name="first_name" type="text" class="form-control" id="inputEmail4" placeholder="first name" value="<?php echo $record['first_name'] ?>">
			    	</div>
			    	<div class="form-group col-md-6">
			      		<label for="inputPassword4">Last Name</label>
			      		<input name="last_name" type="text" class="form-control" id="inputPassword4" placeholder="last name" value="<?php echo $record['last_name'] ?>">
			   		</div>
		 		</div>
		 			<div class="form-group">
		    			<label for="inputAddress">Contact Number</label>
		   				<input name="contact_number" type="text" class="form-control" id="inputAddress" placeholder="contact number" value="<?php echo $record['contact_number'] ?>">
		 			 </div>
		  			<div class="form-group">
		    			<label for="inputAddress">Permanent Address</label>
		    			<input name="address" type="text" class="form-control" id="inputAddress" placeholder="address" value="<?php echo $record['address'] ?>">
		  			</div>
		 			<div class="form-group">
		  			    <label for="inputAddress">Salary</label>
		   				<input name="salary" type="text" class="form-control" id="inputAddress" placeholder="salary" value="<?php echo $record['salary'] ?>">
		  			</div>

		        <button type="Submit" class="btn btn-default btnSubmit">Submit</button>
		  		<!--<button type="Submit" class="btn btn-default btn4"><a href="staff_table.php">Submit</a></button>-->
			</form>
		</div>
	</body>
</html>