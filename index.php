<?php $title = "Home";
require_once "./includes/header.php"; 
require_once "./db/conn.php";
$spec=$crud->getSpecialities();
?>

<h3 class="text-center">Registration <?php echo $title ?> section</h3>

<form method="post" action="success.php">
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input required type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input required type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
  </div>
  <div class="form-group">
    <label for="dob">Date of birth</label>
    <input type="text" id='dob'  name='dob' class="form-control">
  </div>
  <div class="form-group">
    <label class="form-check-label" for="Speciality">Speciality</label>
    <select class='form-control' id="Speciality" name='Speciality'>
      <?php while($r = $spec->fetch(PDO::FETCH_ASSOC)){?>
        <option value="<?php echo $r["speciality_id"]?>"><?php echo $r["name"]?></option>
      <?php }?>
    </select>
  </div>
  <div>
    <label for="emailaddress">Email Address</label>
    <input required id="emailaddresss" class="form-control" aria-describedby="emailagreement" name="emailaddresss">
    <small id="emailagreement" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div>
    <label for="phonenumber">Contact Number</label>
    <input id="phonenumber" class="form-control" aria-describedby="phoneagreement" name="phonenumber">
    <small id="phoneagreement" class="form-text text-muted">We'll never share your number with anyone else.</small>
  </div>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <br>
  <div class="d-grid gap-2">
  <button name="isSubmited" type="submit" class="btn btn-block btn-primary ">Register</button>
  </div>
</form>
<br>
<br>
<?php include "./includes/footer.php" ?>