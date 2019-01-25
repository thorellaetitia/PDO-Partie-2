<?php

require 'models/modelDatabase.php';
require 'models/modelPatients.php';

//on instancie un nouvel objet clients
$ListpatientsObj = new patients();
$Arraypatients = $ListpatientsObj->ShowAllPatients();

$deletePatientObj = new patients();

if (isset($_GET['id'])) {
    $ListpatientsObj->id = $_GET['id'];
}

if (isset($_GET['id'])) {
    $deletePatientObj->id = $_GET['id'];
    $deletePatientObj->deletePatientsById();
}