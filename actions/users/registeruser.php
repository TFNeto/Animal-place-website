<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  $username       = $_POST['username'];
  $password       = $_POST['password'];
  $repeatpassword = $_POST['repeatpassword'];
  $name           = $_POST['name'];
  $email          = $_POST['email'];
  $age            = $_POST['age'];
  $gender         = $_POST['gender'];
  $address        = $_POST['address'];
  $country        = $_POST['country'];
  $city           = $_POST['city'];

  $name     = strip_tags($_POST['name']);
  $username = strip_tags($_POST['username']);
  $email    = strip_tags($_POST['email']);
  $age      = strip_tags($_POST['age']);
  $address  = strip_tags($_POST['address']);
  $country  = strip_tags($_POST['country']);
  $city     = strip_tags($_POST['city']);

  $password=password_hash($password,PASSWORD_BCRYPT);
  
  createUser($username, $password, $name, $email, $gender, $age, $country, $city, $address);
  
  die (header("Location: {$BASE_URL}"));
?>