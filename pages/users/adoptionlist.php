<?php
  include_once ('../../config/init.php');
  include_once ($BASE_DIR . 'database/animals.php');
  require_once($BASE_DIR . 'menu/navbar.php');

  $smarty->display('users/adoptionlist.tpl');

?>