<?php 
  include_once ('../../config/init.php');
  include_once ($BASE_DIR . 'database/users.php');

  
  if(!empty($_SESSION['pet_id'])){
    $num=count($_SESSION['pet_id']);
    $i=0;
    while($i<$num){
      $lista['pet_id']=$_SESSION['pet_id'][$i];
      $lista['name']=get_pet($_SESSION['pet_id'][$i]);
      $i++;
    }
    echo json_encode($lista);
  }
  else{
    $lista=FALSE;
    echo json_encode($lista);
  }  
?>