<?php

  function createUser($username, $password, $name, $email, $gender, $age, $country, $city, $address) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, ?, ?, ?, DEFAULT)");
    $stmt->execute(array($username, $password, $name, $email, $gender, $age,$country, $city, $address ));
  }

  function checkUser($username){ //retorna se ja existe utilizador com este nome
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

?>  