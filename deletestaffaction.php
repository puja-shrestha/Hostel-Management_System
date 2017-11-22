<?php
	  $connection = mysqli_connect("localhost","root","");
	  if(!@mysqli_select_db($connection,"admission"))die("DB Not Found");

	echo $var = $_GET['id'];

	$query ="DELETE FROM `staff_table` WHERE `id`='$var'";
	$run = mysqli_query($connection,$query);

	header("Location: staff_table.php");
?>