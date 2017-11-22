<?php
  $connection = mysqli_connect("localhost","root","");
  if(!@mysqli_select_db($connection,"admission"))die("DB Not Found");

  //session_start();
  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $contactnumber = $_POST['contact_number'];
  $address = $_POST['address'];
  $salary = $_POST['salary'];

  $insert = "INSERT INTO `staff_table`(`id`, `first_name`, `last_name`, `contact_number`, `address`, `salary`) VALUES ('' , '$firstname' , '$lastname' , '$contactnumber' ,'$address' , '$salary')";

  $res = mysqli_query($connection, $insert);
  echo("error description: ".mysqli_error($connection));

  header("Location: staff_table.php");
  //include('css/home.php');
?>