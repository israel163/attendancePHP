<?php
require_once 'db/conn.php';
if(isset($_GET['id'])){
  $id=$_GET["id"];
  $result=$crud->deleteAttendee($id);
  if($result){
    include 'includes/successmnessage.php';
    header('Location: attendees.php');
  }else{
    include 'includes/errormessage.php';
  }
}else{
  echo 'no data recibed';
}
?>
