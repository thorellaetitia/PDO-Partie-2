<?php

require 'models/modelDatabase.php';
require 'models/modelPatients.php';

//on instancie un nouvel objet clients
$ListpatientsObj = new patients();
$Arraypatients = $ListpatientsObj->ShowAllPatients();

$deletePatientObj = new patients();

$searchPatientObj = new patients();

//fonction qui permet de mettre le contenu= $terme en minuscule
//$terme = strtolower($terme);

if (isset($_GET['id'])) {
    $ListpatientsObj->id = $_GET['id'];
}

if (isset($_GET['id'])) {
    $deletePatientObj->id = $_GET['id'];
    $deletePatientObj->deletePatientsById();
}

if (isset($_GET['search']) AND isset($_GET['terme'])) {
    $terme = htmlspecialchars($_GET['terme']); //pour sécuriser le formulaire contre les failles html
    $terme = strtolower($terme);
    $searchPatientObj->lastName = $terme;
    $searchPatientObj->firstName = $terme;
    $Arraypatients = $searchPatientObj->searchPatient();
}