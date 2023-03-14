<?php
$title = "Attendance";
require_once "./includes/header.php";
require_once "./db/conn.php";
$results = $crud->readAttandee();
?>
<h3 class="text-center">Record of the attendance</h3>
</br>
<div class="container">
  <table class="table">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <!-- <th scope="col">Birthday</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th> -->
      <th scope="col">Speciality</th>
      <th scope="col">Actions</th>
    </tr>
    <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) {
    ?>
      <tr>
        <td><?php echo $r["attandee_id"] ?></td>
        <td><?php echo $r["firstname"] ?></td>
        <td><?php echo $r["lastname"] ?></td>
        <!-- <td><?php echo $r["dob"] ?></td>
        <td><?php echo $r["email"] ?></td>
        <td><?php echo $r["phone"] ?></td> -->
        <td><?php echo $r["name"] ?></td>
        <td>
          <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="view.php?id=<?php echo $r["attandee_id"] ?>">View</a></li>
              <li><a class="dropdown-item" href="edit.php?id=<?php echo $r["attandee_id"] ?>">Edit</a></li>
              <li><a onclick="return confirm('Sure?');" class="dropdown-item" href="remove.php?id=<?php echo $r["attandee_id"] ?>">Remove</a></li>
            </ul>
          </div>
        </td>
      </tr>
    <?php } ?>
</div>
</table>

<?php
require_once './includes/footer.php' ?>