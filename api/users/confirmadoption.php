<?php 
  include_once ('../../config/init.php');
  include_once ($BASE_DIR . 'database/users.php');
 
  $pet_id=$_POST['confirm'];
  
  $status=confirmadoption($pet_id);
  
  die(header("'$BASE_DIR'pages/users/admin.php"));
?>