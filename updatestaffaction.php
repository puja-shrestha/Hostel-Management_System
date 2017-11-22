<?php
  $connection = mysqli_connect("localhost","root","");
  if(!@mysqli_select_db($connection,"admission"))die("DB Not Found");

  //session_start();
  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $contactnumber = $_POST['contact_number'];
  $address = $_POST['address'];
  $salary = $_POST['salary'];

  $id = $_GET['id'];

  $update = "UPDATE `staff_table` SET `first_name`='$firstname', `last_name`='$lastname',`contact_number`='$contactnumber',`address`='$address',`salary`='$salary' WHERE `id` = '$id'";

  $res = mysqli_query($connection, $update);
  //var_dump($res);
  //exit();
  echo("error description: ".mysqli_error($connection));

  header("Location: staff_table.php");
  //include('css/home.php');
?>