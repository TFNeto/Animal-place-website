<?php 
  include_once ('../../config/init.php');
  include_once ($BASE_DIR . 'database/users.php');
 
  $pet_id=$_GET['id'];
  $user_id=$_SESSION['user_id'];
  
  confirm ($user_id,$pet_id);

  $status=true;
  echo json_encode($status);
?>