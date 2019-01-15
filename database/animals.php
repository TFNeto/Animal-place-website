<?php
  function getAllAnimalsLogged($user_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT specie.name AS specie ,pet.name AS name ,breed.name AS breed, pet.age AS age, pet.picture AS picture, pet.pet_id AS pet_id
                            FROM pet JOIN specie USING (id_sp) JOIN breed USING (id_bre) 
                            WHERE pet_id NOT IN(SELECT pet_id FROM orders WHERE user_id= ? OR status='Confirmed')");
    $stmt->execute(array($user_id));
    return $stmt->fetchAll();
  }
  function getAllAnimals(){
    global $conn;
    $stmt = $conn->prepare("SELECT specie.name AS specie ,pet.name AS name ,breed.name AS breed, pet.age AS age, pet.picture AS picture, pet.pet_id AS pet_id
                            FROM pet JOIN specie USING (id_sp) JOIN breed USING (id_bre) 
                            WHERE pet.pet_id NOT IN(SELECT pet_id FROM orders WHERE status='Confirmed') ORDER BY RANDOM () LIMIT 15");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getBreedsBySpecie ($id_sp){
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM breed WHERE id_sp = ? ORDER BY name ASC');
    $stmt->execute(array($id_sp));
    return $stmt->fetchAll();
  }

  function getSpecies(){
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM specie ORDER BY name ASC');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getanimalsearch($id_bre) {
    global $conn;
    $stmt = $conn->prepare('SELECT specie.name AS specie ,pet.name AS name ,breed.name AS breed, pet.age AS age, pet.picture AS picture, pet.pet_id AS pet_id
                            FROM pet JOIN specie USING (id_sp) JOIN breed USING (id_bre) 
                            WHERE id_bre = ? ORDER BY name ASC');
    $stmt->execute(array($id_bre));
    return $stmt->fetchAll();
  }
  function getpet($pet_id){
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM pet WHERE pet_id = ? ');
    $stmt->execute(array($pet_id));
    return $stmt->fetchAll();
  }

  function registerpet ($name,$age,$id_sp,$id_bre,$contact,$picture){
    global $conn;
    $stmt = $conn->prepare('INSERT INTO pet (pet_id, name, age,id_sp ,id_bre, contact, picture)VALUES (DEFAULT, $1, $2, $3 ,$4, $5, $6 )');
    $stmt->execute(array($name,$age,$id_sp,$id_bre,$contact,$picture));
    return $stmt->fetchAll();
  }
?>