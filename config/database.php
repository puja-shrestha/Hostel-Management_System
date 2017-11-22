<?php
	$connection = mysqli_connect("localhost","root","");
  	if(!@mysqli_select_db($connection,"admission"))die("DB Not Found");
?>