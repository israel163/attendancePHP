<?php
require_once 'includes/header.php';
require_once 'db/conn.php';

if(isset($_POST["isSubmited"])){
  $id=$_POST["id"];
  $fname = $_POST["firstname"];
  $lname = $_POST["lastname"];
  $dob = $_POST["dob"];
  $speciality = $_POST["Speciality"];
  $email = $_POST["emailaddresss"];
  $phone = $_POST["phonenumber"];

  $result=$crud->updateAttendee($fname, $lname, $dob, $phone, $email, $speciality,$id);
  if($result){
    include 'includes/successmnessage.php';
    header('Location: attendees.php');
  }else{
    include 'includes/errormessage.php';
  }
}else{
  echo 'no id recibed';
}
?>