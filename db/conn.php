<?php
  $host="127.0.0.1";
  $db="attendance_db"; 
  $charset="utf8mb4";
  $user="root";
  $pass="";
 

  $dsn="mysql:host=$host;dbname=$db;charset=$charset";

  try{
    $pdo=new PDO($dsn,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // print "connection stablished";
  } catch (PDOException $e){
    throw new PDOException($e->getMessage());
  }

  require_once 'crud.php';
  $crud=new crud($pdo);
?>