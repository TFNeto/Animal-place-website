<?php 

include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/animals.php');
require_once($BASE_DIR . 'menu/navbar.php');

$breeds=getallbreeds();
$smarty->assign('breeds', $breeds);
$smarty->display('animals/searchbar.tpl');


?>
