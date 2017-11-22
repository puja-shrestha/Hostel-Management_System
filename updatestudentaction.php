<?php
  $connection = mysqli_connect("localhost","root","");
  if(!@mysqli_select_db($connection,"admission"))die("DB Not Found");

 
  $firstname = $_POST['first_name'];
  $contactnumber = $_POST['contact_number'];
  $roomnumber = $_POST['room_number'];
  $fees = $_POST['fees'];
  $stayfrom = $_POST['stayfrom'];

  $id = $_GET['id'];

  $update = "UPDATE `student_table` SET `first_name`='$firstname',`contact_number`='$contactnumber',`room_number`='$roomnumber',`fees`='$fees',`stayfrom`='$stayfrom' WHERE `id` = '$id'";

  $res = mysqli_query($connection, $update);
  //var_dump($res);
  //exit();
  echo("error description: ".mysqli_error($connection));

  header("Location: students_table.php");
  //include('css/home.php');
?>