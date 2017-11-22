<?php
	  $connection = mysqli_connect("localhost","root","");
	  if(!@mysqli_select_db($connection,"admission"))die("DB Not Found");

	echo $var = $_GET['id'];

	$query ="DELETE FROM `room_info` WHERE `id`='$var'";
	$run = mysqli_query($connection,$query);

	header("Location: room_table.php");
?>