<?php
  $connection = mysqli_connect("localhost","root","");
  if(!@mysqli_select_db($connection,"admission"))die("DB Not Found");
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
        		<h3>HOSTEL MANAGEMENT SYSTEM (Admin Pannel)</h3>
		  </div>
   		</div>
  		<div class="row">
  			<button type="button" class="btn btn-default btn-lg btn-block btnDashboard"><a href="index.php">DASHBOARD</a></button>
  		</div>

<?php

  $query = "SELECT * FROM `staff_table`";
  //$query = "SELECT `id`, `first_name`, `room_number`, `contact_number`, `gender`, `fees` ,`stayfrom` FROM `student_table` WHERE 1";
  $run = mysqli_query($connection,$query);
  $num = mysqli_num_rows($run);   //Count the rows of the query
  //echo $num = mysqli_num_rows($run);
?>

	
    <table class="table">
      	<thead class="thead-light">
	        <tr>
	          <th scope="col">S.No.</th>
	          <th scope="col">Staff Name</th>
	          <th scope="col">Contact No.</th>
	          <th scope="col">Address</th>
	          <th scope="col">Salary</th>
	          <th scope="col">Operation1</th>
	          <th scope="col">Operation2</th>
	        </tr>
      	</thead>
      	<tbody>
<?php
  
  for($i=1;$i<=$num;$i++){
    $record = mysqli_fetch_array($run);
?>
        <tr>
	        <th scope="row"><?php echo $i ?></th>
	        <td><?php echo $record['first_name']; ?></td>
	        <td><?php echo $record['contact_number']; ?></td>
	        <td><?php echo $record['address']; ?></td>
	        <td><?php echo $record['salary']; ?></td>
	        <td> 
	         	<a href="update_staff_info.php?id=<?php echo $record['id']; ?>">Edit</a> 
	        </td>
	        <td>
	            <a href="deletestaffaction.php?id=<?php echo $record['id']; ?>">Delete</a> 
	        </td>
        </tr>
<?php
  }
?>
     	</tbody>
    </table>
    	<button type="Submit" class="btn btn-default btnSubmit"><a href="staff_info.php">New Staff</a></button>
  	</div>
</body>
</html>