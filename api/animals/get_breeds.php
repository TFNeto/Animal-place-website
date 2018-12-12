<?php 
 include_once ('../../config/init.php');
 include_once ($BASE_DIR . 'database/animals.php');

 $id_sp = $_GET['id_sp'];

 $breeds = getBreedsBySpecie($id_sp);

 echo json_encode($breeds);
?>