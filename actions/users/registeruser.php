<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  
  $username = $_POST['user'];
  $mail     = $_POST['mail'];
  $pass     = $_POST['pass'];
  $passw    = $_POST['passw'];
  $name     = $_POST['name'];
  $age      = $_POST['age'];
  $gender   = $_POST['gender'];
  $address  = $_POST['address'];
  $country  = $_POST['country'];
  $city     = $_POST['city'];

  $username = strip_tags($_POST['username']);
  $mail     = strip_tags($_POST['mail']);
  $name     = strip_tags($_POST['name']);
  $adress   = strip_tags($_POST['adress']);
  $country  = strip_tags($_POST['country']);
  $city     = strip_tags($_POST['city']);

  createUser($username, $mail, $pass, $passw, $name, $age, $gender, $adress, $country, $city);
  header("Location: $BASE_URL");
?>