<?php
  include_once ('../../config/init.php');
  include_once ($BASE_DIR . 'database/users.php');
  require_once($BASE_DIR . 'menu/navbar.php');

  $status=checkadoption($_SESSION['user_id']);
  $smarty->assign('status', $status);

  $smarty->display('users/adoptionlist.tpl');
?>