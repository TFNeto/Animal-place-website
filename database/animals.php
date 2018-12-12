<?php
  function getAllAnimals() {
    global $conn;
    $stmt = $conn->prepare('SELECT breed.name as breedname, pet.name as petname, picture FROM pet JOIN breed Using (id_bre) ORDER BY breed.name ASC');
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
    $stmt = $conn->prepare('SELECT breed.name as breedname, pet.name as petname, picture FROM pet JOIN breed Using (id_bre) WHERE id_bre = ? ORDER BY petname ASC');
    $stmt->execute(array($id_bre));
    return $stmt->fetchAll();
  }
?>