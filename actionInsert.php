<?php
  $connection = mysqli_connect("localhost","root","");
  if(!@mysqli_select_db($connection,"admission"))die("DB Not Found");

  //session_start();
  $firstname = $_POST['first_name'];
  $middlename = $_POST['middle_name'];
  $lastname = $_POST['last_name'];
  $contactnumber = $_POST['contact_number'];
  $emergencycontact = $_POST['emergency_contact'];
  $emailid = $_POST['email_id'];
  $gender = $_POST['radio'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $roomnumber = $_POST['room_number'];
  $fees = $_POST['fees'];
  $stayfrom = $_POST['stayfrom'];

  $insert = "INSERT INTO `student_table`(`id`, `first_name`, `middle_name`, `last_name`, `contact_number`, `emergency_contact`, `email_id`, `gender`, `correspondence_address`, `permanent_address`, `room_number`, `fees`, `stayfrom`) VALUES ('' , '$firstname' , '$middlename' , '$lastname' , '$contactnumber' , '$emergencycontact' , '$emailid' , '$gender' , '$address1' , '$address2' , '$roomnumber' , '$fees' , '$stayfrom')";

  $res = mysqli_query($connection, $insert);
  echo("error description: ".mysqli_error($connection));

  header("Location: students_table.php");
  //include('css/home.php');
?>