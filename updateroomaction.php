<?php
  $connection = mysqli_connect("localhost","root","");
  if(!@mysqli_select_db($connection,"admission"))die("DB Not Found");

  $roomnumber = $_POST['room_no'];
  $seater = $_POST['seater'];
  $fees = $_POST['fees'];
  $fees_per_month = $_POST['fees_per_month'];

  $id = $_GET['id'];

  $update = "UPDATE `room_info` SET `room_no`= '$roomnumber' ,`seater`= '$seater' ,`fees_per_month`= '$fees_per_month' WHERE `id` = '$id'";

  $res = mysqli_query($connection, $update);
  //var_dump($res);
  //exit();
  echo("error description: ".mysqli_error($connection));

  header("Location: room_table.php");
  //include('css/home.php');
?>