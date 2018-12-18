<?php

  function createUser($username, $password, $name, $email, $gender, $age, $country, $city, $address) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, ?, ?, ?, DEFAULT)");
    $stmt->execute(array($username, $password, $name, $email, $gender, $age,$country, $city, $address ));
  }

?>  