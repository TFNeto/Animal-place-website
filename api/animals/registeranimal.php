<?php 
 include_once ('../../config/init.php');
 include_once ($BASE_DIR . 'database/animals.php');

 $name = strip_tags( $_POST['name']);
 $age = strip_tags( $_POST['age']);
 $id_sp = strip_tags($_POST['id_sp']);
 $id_bre = strip_tags($_POST['Breed']);
 $contact = strip_tags($_POST['contact']);
 $picture= strip_tags($_POST['picture']);

 registerpet ($name,$age,$id_sp,$id_bre,$contact,$picture);

 die(header("'$BASE_DIR'pages/users/admin.php"));
?>