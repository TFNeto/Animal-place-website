<?php 
  include_once ('../../config/init.php');
  include_once ($BASE_DIR . 'database/users.php');
 
  $user_id=$_SESSION['user_id'];
  $status=getpendingstatus();
 
  echo json_encode($status);
?>