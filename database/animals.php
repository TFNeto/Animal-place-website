<?php
  function getAllAnimals() {
    global $conn;
    $stmt = $conn->prepare('SELECT breed.name as breedname, pet.name as petname, picture FROM pet JOIN breed Using (id_bre) ORDER BY breed.name ASC');
    $stmt->execute();
    return $stmt->fetchAll();
  }
  function getanimalsearch($breed) {
    global $conn;
    $stmt = $conn->prepare('SELECT breed.name as breedname, pet.name as petname, picture FROM pet JOIN breed Using (id_bre) WHERE breedname =? ORDER BY breed.name ASC');
    $stmt->execute(array($breed));
    return $stmt->fetchAll();
  }
  function getallbreeds (){
    global $conn;
    $stmt = $conn->prepare('SELECT name FROM breed ORDER BY breed.name ASC');
    $stmt->execute();
    return $stmt->fetchAll();
  }

?>