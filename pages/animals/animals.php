<?php
    
    include_once ('../../config/init.php');
    include_once ($BASE_DIR . 'database/animals.php');
    require_once($BASE_DIR . 'menu/navbar.php');
  
    
    $animals = getAllAnimals();

    $smarty->assign('animals', $animals);
    $smarty->display('animals/animals.tpl');
?>

 