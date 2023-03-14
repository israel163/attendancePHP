<?php
$title = "Success";
require_once "./includes/header.php";
require_once "./db/conn.php";

if (isset($_POST["isSubmited"])) {
  $fname = $_POST["firstname"];
  $lname = $_POST["lastname"];
  $dob = $_POST["dob"];
  $speciality = $_POST["Speciality"];
  $email = $_POST["emailaddresss"];
  $phone = $_POST["phonenumber"];

  $isSuccess = $crud->insertAttendee($fname, $lname, $dob, $email, $phone, $speciality);
  if ($isSuccess) {
    include 'includes/successmnessage.php';
  } else {
    include 'includes/errormessage.php';
  }
}
?>


<!-- GET METHOD -->
<!-- <div class="card" style="width: 18rem;"> -->
<!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPyGNr2qL63Sfugk2Z1-KBEwMGOfycBribew&usqp=CAU"   -->
<!-- class="card-img-top" alt="User image" style="width:50;" height="200" > -->
<!-- <div class="card-body"> -->
<!-- <h5 class="card-title"> <?php echo $_GET["firstname"] . " " . $_GET["lastname"] ?></h5> -->
<!-- <p class="card-text">Birthday: <?php echo $_GET["dob"] ?></p> -->
<!-- <p class="card-text">Specialiy: <?php echo $_GET["Speciality"] ?></p> -->
<!-- <p class="card-text">Email: <?php echo $_GET["emailaddresss"] ?></p> -->
<!-- <p class="card-text">Phone: <?php echo $_GET["phonenumber"] ?></p> -->
<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
<!-- </div> -->
<!-- </div> -->

<!-- POST METHOD -->
<center>
  <div class="centered">
    <div class="card" style="width: 18rem;">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPyGNr2qL63Sfugk2Z1-KBEwMGOfycBribew&usqp=CAU" class="card-img-top" alt="User image" style="width:50;" height="200">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $_POST["firstname"] . " " . $_POST["lastname"] ?></h5>
        <p class="card-text">Birthday: <?php echo $_POST["dob"] ?></p>
        <p class="card-text">Specialiy: <?php echo $_POST["Speciality"] ?></p>
        <p class="card-text">Email: <?php echo $_POST["emailaddresss"] ?></p>
        <p class="card-text">Phone: <?php echo $_POST["phonenumber"] ?></p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
</center>

<?php require "./includes/footer.php" ?>