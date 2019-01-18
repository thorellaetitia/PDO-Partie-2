<?php

require 'models/modelDatabase.php';
require 'models/modelPatients.php';

//on instancie un nouvel objet clients
$patientsObj = new patients();


if (isset($_GET['id'])) {
    $patientsObj->id = $_GET['id'];
    $arrayProfilePatient = $patientsObj->lastInsertId();
}


