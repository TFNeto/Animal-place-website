<?php 
 include_once ('../../config/init.php');
 include_once ($BASE_DIR . 'database/animals.php');

 $id_bre = $_GET['id_bre'];

 $animals = getanimalsearch($id_bre);

 echo json_encode($animals);
?>