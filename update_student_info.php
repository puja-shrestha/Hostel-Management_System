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


	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">

	<meta charset="UTF-8">
  	<meta name="description" content="HostelManagement system">
  	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		</head>
<body>
	
	<div class="container-fluid">
		<div class="row">
			<div class="header">
				<h3>HOSTEL MANAGEMENT SYSTEM (Admin Pannel)</h3>
			</div>
		</div>
		<div class="row">
			<button type="button" class="btn btn-default btn-lg btn-block btnDashboard"><a href="index.php">DASHBOARD</a></button>
		</div>

		<form action="updatestudentaction.php?id=<?php echo$var ?>" method="post" style="margin-bottom: 40px;">
			<h5>Update Student Info</h5>

			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">First Name</label>
				<div class="col-sm-10">
					<input name="first_name" type="text" class="form-control" id="inputPassword" placeholder="John" value="<?php echo $record['first_name'] ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Contact Number</label>
				<div nam
				class="col-sm-10">
					<input name="contact_number" type="text" class="form-control" id="inputPassword" placeholder="98xxxxxxxx" value="<?php echo $record['contact_number'] ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Room No</label>
				<div class="col-sm-10">
					<input name="room_number" type="text" class="form-control" id="inputPassword" placeholder="100"  value="<?php echo $record['room_number'] ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Fees</label>
				<div class="col-sm-10">
					<input name="fees" type="text" class="form-control" id="inputPassword" placeholder="8,000"  value="<?php echo $record['fees'] ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Stay From</label>
				<div class="col-sm-10">
					<input name="stayfrom" type="text" class="form-control" id="inputPassword" placeholder="2017-4-15" value="<?php echo $record['stayfrom'] ?>">
				</div>
			</div>

			<button type="submit" class="btn btn-default btnSubmit">Update</button>
		</form>

	</div>
</body>
</html>