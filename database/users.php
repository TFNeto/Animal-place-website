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
    return $stmt->fetch();
  }

  function checksign($username){
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute( array ($username) );
    return $stmt->fetch();
  }

  function getadoptionstatus ($user_id){
    global $conn;
    $stmt = $conn->prepare('SELECT pet.name AS nome , orders.status AS estado
                            FROM orders JOIN pet USING (pet_id)
                            WHERE user_id = ?');
    $stmt->execute( array ($user_id) );
    return $stmt->fetchAll();
  }
  function getpendingstatus (){
    global $conn;
    $stmt = $conn->prepare("SELECT users.name AS name , pet.name AS pet, orders.order_id AS order_id
                            FROM orders JOIN users USING (user_id) 
                            JOIN pet USING (pet_id)
                            WHERE status='Pending'");
    $stmt->execute( );
    return $stmt->fetchAll();
  }
  function confirmadoption ($pet_id){
    global $conn;
    $stmt = $conn->prepare("UPDATE orders 
                            SET status='Confirmed' 
                            WHERE order_id = ?");
    $stmt->execute(array ($pet_id));
    return $stmt->fetchAll();
  }
  
  function canceladoption ($pet_id){
    global $conn;
    $stmt = $conn->prepare("UPDATE orders 
                            SET status='Denied' 
                            WHERE order_id = ?");
    $stmt->execute(array ($pet_id));
    return $stmt->fetchAll();
  }
 ?>  