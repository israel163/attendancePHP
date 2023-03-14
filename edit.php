<?php
$title = "Edit";
require_once "./includes/header.php";
require_once "db/conn.php";
$spec = $crud->getSpecialities();

if (!isset($_GET['id'])) {
  // echo 'error, contact your server administrator';
  include 'includes/errormessage.php';
  header('Location: attendees.php');
} else {
  $id = $_GET['id'];
  $data = $crud->getsingleAttendee($id);
?>

  <form method="post" action="successedit.php">
    <input name="id" type="hidden" value="<?php echo $data["attandee_id"]?>">
    <div class="form-group">
      <label for="firstname">First Name</label>
      <input value="<?php echo $data['firstname'] ?>" type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
    </div>
    <div class="form-group">
      <label for="lastname">Last Name</label>
      <input value="<?php echo $data['lastname'] ?>" type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
    </div>
    <div class="form-group">
      <label for="dob">Date of birth</label>
      <input value="<?php echo $data['dob'] ?>" type="text" id='dob' name='dob' class="form-control">
    </div>
    <div class="form-group">
      <label class="form-check-label" for="Speciality">Speciality</label>
      <select class='form-control' id="Speciality" name='Speciality'>
        <?php while ($r = $spec->fetch(PDO::FETCH_ASSOC)) { ?>
          <option value="<?php echo $r["speciality_id"] ?>" <?php if ($r["speciality_id"] == $data["speciality_id"]) echo "selected" ?>><?php echo $r["name"] ?></option>
        <?php } ?>
      </select>
    </div>
    <div>
      <label for="emailaddress">Email Address</label>
      <input value="<?php echo $data['email'] ?>" id="emailaddresss" class="form-control" aria-describedby="emailagreement" name="emailaddresss">
      <small id="emailagreement" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div>
      <label for="phonenumber">Contact Number</label>
      <input value="<?php echo $data['phone'] ?>" id="phonenumber" class="form-control" aria-describedby="phoneagreement" name="phonenumber">
      <small id="phoneagreement" class="form-text text-muted">We'll never share your number with anyone else.</small>
    </div>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <br>
    <div class="d-grid gap-2">
      <button name="isSubmited" type="submit" class="btn btn-block btn-success ">Update Information</button>
    </div>
  </form>
<?php } ?>

<?php
require_once "./includes/footer.php";
?>