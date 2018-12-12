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
  
  function getallbreeds ($input){
    global $conn;
    $stmt = $conn->prepare('SELECT breed.name FROM breed JOIN specie USING (id_sp) WHERE specie.name= ? ORDER BY name ASC');
    $stmt->execute($input);
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

?>