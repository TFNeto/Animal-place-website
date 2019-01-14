<?php

  function createUser($username, $password, $name, $email, $gender, $age, $country, $city, $address) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, ?, ?, ?, DEFAULT)");
    $stmt->execute(array($username, $password, $name, $email, $gender, $age,$country, $city, $address ));
  }

  function checkuser($username){ //retorna se ja existe utilizador com este nome
    global $conn;
    $stmt = $conn->prepare('SELECT username FROM users WHERE username = ? ');
    $stmt->execute( array ($username) );
    return $stmt->rowCount();
  }

  function checkmail($email){ //retorna se ja existe utilizador com este email
    global $conn;
    $stmt = $conn->prepare('SELECT username FROM users WHERE email = ?');
    $stmt->execute( array ($username) );
    return $stmt->rowCount();
  }

  function checkadoption($user_id){
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM orders JOIN pet using (pet_id)  WHERE user_id = ?');
    $stmt->execute( array ($user_id) );
    return $stmt->fetchAll();
  }

  function checksign($username){
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute( array ($username) );
    return $stmt->fetch();
  }

 ?>  