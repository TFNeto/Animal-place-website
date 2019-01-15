<?php 
  include_once ('../../config/init.php');
  include_once ($BASE_DIR . 'database/animals.php');

  
  if(!empty($_SESSION['pet_id'])){
    $num=count($_SESSION['pet_id']);
    $i=0;
    if(!isset($lista)){
      $lista=array();
    }
    while($i<$num){
      array_push($lista,getpet($_SESSION['pet_id'][$i]));
      $i++;
    }
    echo json_encode($lista);
  }
  else{
    $lista=FALSE;
    echo json_encode($lista);
  }  
?>