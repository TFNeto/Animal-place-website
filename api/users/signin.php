<?php 
  include_once ('../../config/init.php');
  include_once ($BASE_DIR . 'database/users.php');

  $username = strip_tags($_GET['username']);
  $password = strip_tags($_GET['password']);

  $reg=checksign($username);
  $hashpass=$reg['password'];
  

  if(password_verify($password, $hashpass )){
    $_SESSION['username']=$username;
    $_SESSION['user_id']=$reg['user_id'];
    if($reg['admin'] == TRUE) $_SESSION['userLevel']= 'admin';
    else $_SESSION['userLevel']= 'user';
    $success=TRUE;
    echo json_encode($success);
  }
  else {
    $success=FALSE;  
    echo json_encode($success);
  }
?>