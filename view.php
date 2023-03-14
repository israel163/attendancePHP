<?php 
$title= 'Attandee Information';
require_once "./includes/header.php";
require_once "db/conn.php";

if(!isset($_GET["id"])){
  include 'includes/errormessage.php';
}else{ 
  $id=$_GET["id"];
  $result=$crud->getsingleAttendee($id);
?>
<center>
<div class="centered">
  <div class="card" style="width: 18rem;">
    <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPyGNr2qL63Sfugk2Z1-KBEwMGOfycBribew&usqp=CAU" class="card-img-top" alt="User image" style="width:50;" height="200"> -->
    <div class="card-body">
      <h5 class="card-title"> <?php echo $result["firstname"] . " " . $result["lastname"] ?></h5>
      <p class="card-text">Birthday: <?php echo $result["dob"] ?></p>
      <p class="card-text">Speciality: <?php echo $result["name"] ?></p>
      <p class="card-text">Email: <?php echo $result["email"] ?></p>
      <p class="card-text">Phone: <?php echo $result["phone"] ?></p>
      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
    </div>
  </div>
</div>
<div>
  <a href="attendees.php">Return</a>
  <a href="edit.php?id=<?php echo $result["attandee_id"] ?>">Edit</a>
  <a onclick="return confirm('Sure?');" href="remove.php?id=<?php echo $result["attandee_id"] ?>">Remove</a>
</div>      
</center>
<?php }?>
<?php
require_once "includes/footer.php"?>