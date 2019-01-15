<?php 
 include_once ('../../config/init.php');
 include_once ($BASE_DIR . 'database/animals.php');

 $species = getSpecies();

 echo json_encode($species);
?>