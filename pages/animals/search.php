<?php 

include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/animals.php');
require_once($BASE_DIR . 'menu/navbar.php');

$species=get_species();
$breeds=getallbreeds();

$smarty->assign('species',$specie);
$smarty->assign('breeds', $breeds);
$smarty->display('animals/searchbar.tpl');


?>
