<?php
class crud
{
  private $db;

  function __construct($conn)
  {
    $this->db = $conn;
  }

  function insertAttendee($fname, $lname, $dob, $phone, $email, $speciality)
  {
    try {
      $sql = "INSERT INTO attandee (`firstname`, `lastname`, `dob`, `email`, `phone`, `speciality_id`) VALUES (:fname,:lname,:dob,:phone,:email,:speciality)";
      $stmt = $this->db->prepare($sql);
      $stmt->bindparam(":fname", $fname);
      $stmt->bindparam(":lname", $lname);
      $stmt->bindparam(":dob", $dob);
      $stmt->bindparam(":phone", $phone);
      $stmt->bindparam(":email", $email);
      $stmt->bindparam(":speciality", $speciality);
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }
  function readAttandee()
  {
    try {
      $sql = "SELECT * FROM `attandee` a INNER JOIN `specialities` s on a.speciality_id=s.speciality_id";
      $results = $this->db->query($sql);
      return $results;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }
  function getSpecialities()
  {
    try {
      $sql = "SELECT * FROM `specialities`;";
      $results = $this->db->query($sql);
      return $results;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }
  function getsingleAttendee($id)
  {
    try {
      $sql = "SELECT * FROM `attandee` a inner join `specialities` s on a.speciality_id=s.speciality_id WHERE attandee_id=:id";
      $stmt = $this->db->prepare($sql);
      $stmt->bindparam(":id", $id);
      $stmt->execute();
      $result = $stmt->fetch();
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }
  function updateAttendee($fname, $lname, $dob, $phone, $email, $speciality, $id)
  {
    try {
      $sql = "UPDATE `attandee` SET `firstname`=:fname,`lastname`=:lname,`dob`=:dob,`email`=:email,`phone`=:phone,`speciality_id`=:speciality
       WHERE attandee_id=:id";
      $stmt = $this->db->prepare($sql);
      $stmt->bindparam("id", $id);
      $stmt->bindparam(":fname", $fname);
      $stmt->bindparam(":lname", $lname);
      $stmt->bindparam(":dob", $dob);
      $stmt->bindparam(":phone", $phone);
      $stmt->bindparam(":email", $email);
      $stmt->bindparam(":speciality", $speciality);
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  function deleteAttendee($id)
  {
    try {
      $sql = "DELETE FROM `attandee` WHERE attandee_id=:id";
      $stmt = $this->db->prepare($sql);
      $stmt->bindparam(':id', $id);
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }
}
