<?php
  $connection = mysqli_connect("localhost","root","");
  if(!@mysqli_select_db($connection,"admission"))die("DB Not Found");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>

	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">

	<meta charset="UTF-8">
  	<meta name="description" content="Hostel Management system">
  	<meta name="keywords" content="Hostel,Hostels of Kathmandu,Girls Hostel,Best Hostel in Kathmandu">
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
				<div class="col-md-4 col1">
					<button type="button" class="btn btn-default btn-lg std_btn"><a href="students_table.php">STUDENT INFORMATION</a></button>
				</div>
				<div class="col-md-4 col2">
					<button type="button" class="btn btn-default btn-lg staff_btn"><a href="staff_table.php">STAFF INFORMATION</a></button>
				</div>
				<div class="col-md-4 col3">
					<button type="button" class="btn btn-default btn-lg room_btn"><a href="room_table.php">ROOM INFORMATION</a></button>
				</div>
			</div>
		</div>
	</body>
</html>