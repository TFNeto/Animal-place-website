<?php 
  include_once ('../../config/init.php');
  include_once ($BASE_DIR . 'database/animals.php');

  $pet_id = $_GET['pet_id'];
  if(!isset($_SESSION['pet_id'])){
    $_SESSION['pet_id']=array();
  }

  array_push($_SESSION['pet_id'],$pet_id);
  $_SESSION['pet_id']=array_unique( $_SESSION['pet_id']);
  print_r($_SESSION['pet_id']);

  echo json_encode($pet_id);
?>