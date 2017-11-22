<?php
  $connection = mysqli_connect("localhost","root","");
  if(!@mysqli_select_db($connection,"admission"))die("DB Not Found");

  $room_number = $_POST['room_number'];
  $seater = $_POST['seater'];
  $fees_per_month = $_POST['fees_per_month'];

  $insert = "INSERT INTO `room_info`(`id`, `room_no`, `seater`, `fees_per_month`) VALUES('' , '$room_number' , '$seater' , '$fees_per_month')";

  $res = mysqli_query($connection, $insert);
  echo("error description: ".mysqli_error($connection));

  header("Location: room_table.php");
  //include('css/home.php');
?>