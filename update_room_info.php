<?php
	$connection = mysqli_connect("localhost","root","");
  	if(!@mysqli_select_db($connection,"admission"))die("DB Not Found");

  	$var = $_GET['id'];

  	$query = "SELECT * FROM `student_table` WHERE `id` = '$var'";
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
		
		<form action="insertActionRoom.php" method="post" style="margin-bottom: 40px;">
    		<h5>Room Information</h5>

  			<div class="form-row">
	    		<div class="form-group col-md-6">
	      			<label>Room No</label>
	     			<input name="room_number" type="text" class="form-control" placeholder="Room no" value="<?php echo $record['room_number'] ?>">
	    		</div>
	   			<div class="form-group col-md-6">
	     			<label for="inputPassword4">Seater</label>
	      			<input name="seater" type="text" class="form-control" placeholder="Seater" value="<?php echo $record['seater'] ?>">
	    		</div>
  			</div>
  				<div class="form-group">
  					<label for="inputAddress">Fees per month</label>
   					<input name="fees_per_month" type="text" class="form-control" placeholder="Enter amount" value="<?php echo $record['fees_per_month'] ?>">
  				</div>

  				<button type="Submit" class="btn btn-default btnSubmit"><a href="insertActionRoom.php">Submit</a></button>
		</form>
	</div>
</body>
</html>