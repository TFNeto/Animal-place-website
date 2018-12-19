<?php
    $BASE_URL = 'https://gnomo.fe.up.pt/~up201402912/trabalhosSiem/PHP2/';
    $BASE_DIR = dirname(__DIR__).'/';

    $conn = new PDO('pgsql:host=db.fe.up.pt;dbname=siem1817', 'siem1817', 'lfbBsoMB');
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec('SET search_path TO animalplace');
    
    include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');

    $smarty = new Smarty;

    $smarty->assign('BASE_URL', $BASE_URL);
    
    $smarty->template_dir = $BASE_DIR . 'templates/';
    $smarty->compile_dir = $BASE_DIR . 'templates_c/';
?>