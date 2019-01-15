<?php
    
    include_once ('../../config/init.php');
    include_once ($BASE_DIR . 'database/animals.php');
    require_once($BASE_DIR . 'menu/navbar.php');
  
    
    
    if($isLoggedIn){
        $animals = getAllAnimalsLogged($_SESSION['user_id']);
    }
    else{
        $animals = getAllAnimals();
    }
    $smarty->assign('isLoggedIn', $isLoggedIn);
    $smarty->assign('animals', $animals);
    $smarty->display('animals/animals.tpl');
?>

 